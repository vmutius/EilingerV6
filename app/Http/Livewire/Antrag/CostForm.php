<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Application;
use App\Models\Cost;
use App\Models\Currency;
use Livewire\Component;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CostForm extends Component
{
    public $cost;

    public $currency_id;

    public $myCurrency;

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function mount(): void
    {
        $this->cost = Cost::where('application_id', session()->get('appl_id'))->first() ?? new Cost;
        $this->currency_id = Application::where('id', session()->get('appl_id'))->pluck('currency_id');
        $this->myCurrency = Currency::where('id', $this->currency_id)->first();
    }

    public function render()
    {
        return view('livewire.antrag.cost-form');
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function saveCost(): void
    {
        $this->validate();
        $this->cost->is_draft = false;
        $this->cost->user_id = auth()->user()->id;
        $this->cost->total_amount_costs = $this->getAmountCost();
        $this->cost->application_id = session()->get('appl_id');
        $this->cost->save();
        session()->flash('success', 'Kosten aktualisiert.');
    }

    public function getAmountCost(): int
    {
        return $this->cost->semester_fees +
            $this->cost->fees +
            $this->cost->educational_material +
            $this->cost->excursion +
            $this->cost->travel_expenses +
            $this->cost->cost_of_living_with_parents +
            $this->cost->cost_of_living_alone +
            $this->cost->cost_of_living_single_parent +
            $this->cost->cost_of_living_with_partner;
    }

    protected function rules(): array
    {
        return [
            'cost.semester_fees' => 'required|numeric',
            'cost.fees' => 'required|numeric',
            'cost.educational_material' => 'required|numeric',
            'cost.excursion' => 'required|numeric',
            'cost.travel_expenses' => 'required|numeric',
            'cost.cost_of_living_with_parents' => 'nullable|required_without_all:cost.cost_of_living_alone,cost.cost_of_living_single_parent,cost.cost_of_living_with_partner|numeric',
            'cost.cost_of_living_alone' => 'nullable|required_without_all:cost.cost_of_living_with_parents,cost.cost_of_living_single_parent,cost.cost_of_living_with_partner|numeric',
            'cost.cost_of_living_single_parent' => 'nullable|required_without_all:cost.cost_of_living_with_parents,cost.cost_of_living_alone,cost.cost_of_living_with_partner|numeric',
            'cost.cost_of_living_with_partner' => 'nullable|required_without_all:cost.cost_of_living_with_parents,cost.cost_of_living_alone,cost.cost_of_living_single_parent|numeric',
            'cost.number_of_children' => 'required|numeric|between:0,100',
        ];
    }
}
