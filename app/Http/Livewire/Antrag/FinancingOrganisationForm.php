<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Application;
use App\Models\Currency;
use App\Models\FinancingOrganisation;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class FinancingOrganisationForm extends Component
{
    public $financings;

    public $currency_id;

    public $myCurrency;

    protected $rules = [
        'financings.*.financing_name' => 'required',
        'financings.*.financing_amount' => 'required|numeric',
    ];

    public function messages(): array
    {
        return [
            'financings.*.financing_name' => __('financing :position financing_name'),
            'financings.*.financing_amount' => __('financing :position financing_amount'),

        ];
    }

    public function mount()
    {
        $this->financings = FinancingOrganisation::where('application_id', session()->get('appl_id'))->get() ?? new Collection;
        $this->currency_id = Application::where('id', session()->get('appl_id'))->pluck('currency_id');
        $this->myCurrency = Currency::where('id', $this->currency_id)->first();
    }

    public function render()
    {
        return view('livewire.antrag.financing-organisation-form');
    }

    public function saveFinancingOrganisation(): void
    {
        $this->validate();

        $this->financings->each(function ($financing) {
            $financing->is_draft = false;
            $financing->user_id = auth()->user()->id;
            $financing->application_id = session()->get('appl_id');
            $financing->save();
        });

        session()->flash('success', __('userNotification.financingSaved'));
    }

    public function getAmountFinancingOrganisation()
    {
        $this->getAmountFinancingOrganisation = '0.00';
        $this->financings->each(function ($financing) {
            $this->getAmountFinancingOrganisation += $financing->financing_amount;
        });

        return $this->getAmountFinancingOrganisation;
    }

    public function addFinancingOrganisation()
    {
        $this->financings->push(new FinancingOrganisation);
    }

    public function delFinancingOrganisation($key)
    {
        $this->financings->forget($key);
    }
}
