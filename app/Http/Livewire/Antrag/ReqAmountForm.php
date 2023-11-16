<?php

namespace App\Http\Livewire\Antrag;

use App\Enums\Form;
use App\Models\Application;
use App\Models\Cost;
use App\Models\CostDarlehen;
use App\Models\Financing;
use App\Models\FinancingOrganisation;
use Livewire\Component;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ReqAmountForm extends Component
{
    public $application;

    public $reqAmount;

    public $total_amount_financing;

    public $total_amount_costs;

    public $diffAmount;

    /**
     * @throws NotFoundExceptionInterface
     * @throws ContainerExceptionInterface
     */
    public function mount(): void
    {
        $this->application = Application::where('id', session()->get('appl_id'))->first();
        if ($this->application->form == Form::Spende) {
            $this->total_amount_financing = FinancingOrganisation::where('application_id', session()->get('appl_id'))
                ->sum('financing_amount');
        } else {
            $this->total_amount_financing = Financing::where('application_id', session()->get('appl_id'))
                ->sum('total_amount_financing');
        }
        if ($this->application->form == Form::Stipendium) {
            $this->total_amount_costs = Cost::where('application_id', session()->get('appl_id'))
                ->sum('total_amount_costs');
        } else {
            $this->total_amount_costs = CostDarlehen::where('application_id', session()->get('appl_id'))
                ->sum('cost_amount');
        }

    }

    public function render()
    {

        if (! is_null($this->total_amount_financing) && ! is_null($this->total_amount_costs)) {
            $this->diffAmount = $this->total_amount_costs - $this->total_amount_financing;
        } else {
            $this->diffAmount = 0;
            $this->application->currency->abbreviation = 'XXX';
        }

        return view('livewire.antrag.req-amount-form');
    }

    public function saveReqAmount(): void
    {
        $this->application->calc_amount = $this->diffAmount;
        $this->application->save();
        session()->flash('success', 'Gewünschter Betrag aktualisiert.');
    }

    protected function rules(): array
    {
        return [
            'application.req_amount' => 'required|numeric',
            'application.payout_plan' => 'sometimes',
        ];
    }
}
