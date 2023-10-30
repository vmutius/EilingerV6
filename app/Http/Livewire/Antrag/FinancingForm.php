<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Application;
use App\Models\Currency;
use App\Models\Financing;
use Livewire\Component;

class FinancingForm extends Component
{
    public $financing;

    public $currency_id;

    public $myCurrency;

    protected $rules = [
        'financing.personal_contribution' => 'required|numeric',
        'financing.other_income' => 'nullable|numeric',
        'financing.income_where' => 'required_unless:financing.other_income,null,0,1',
        'financing.income_who' => 'required_unless:financing.other_income,null,0,1',
        'financing.netto_income' => 'required|numeric',
        'financing.assets' => 'required|numeric',
        'financing.scholarship' => 'required|numeric',
    ];

    public function mount()
    {
        $this->financing = Financing::where('application_id', session()->get('appl_id'))
            ->first() ?? new Financing;
        $this->currency_id = Application::where('id', session()->get('appl_id'))->pluck('currency_id');
        $this->myCurrency = Currency::where('id', $this->currency_id)->first();
    }

    public function render()
    {
        return view('livewire.antrag.financing-form');
    }

    public function saveFinancing()
    {
        $this->validate();
        $this->financing->is_draft = false;
        $this->financing->user_id = auth()->user()->id;
        $this->financing->total_amount_financing = $this->getAmountFinancing();
        $this->financing->application_id = session()->get('appl_id');
        $this->financing->save();
        session()->flash('success', 'Finanzierung aktualisiert.');
    }

    public function getAmountFinancing()
    {
        return $this->financing->personal_contribution +
            $this->financing->other_income +
            $this->financing->netto_income +
            $this->financing->assets +
            $this->financing->scholarship;
    }
}
