<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Currency;
use App\Models\Financing;
use AmrShawky\LaravelCurrency\Facade\Currency as Converter;

class FinancingForm extends Component
{
    public $financing;
    public $currencies;

    protected $rules = [
        'financing.personal_contribution' => 'required|numeric|between:0,100000',
        'financing.other_income' => 'nullable|numeric|between:0,100000',
        'financing.income_where' => 'required_with:financing.other_income',
        'financing.income_who' => 'required_with:financing.other_income',
        'financing.netto_income' => 'required|numeric|between:0,100000',
        'financing.assets' => 'required|numeric|between:0,100000',
        'financing.scholarship' => 'required|numeric|between:0,100000',
        'financing.currency_id' => 'required',
    ];

    public function mount()
    {
        $this->financing = Financing::where('user_id', auth()->user()->id)
            ->where('application_id', session()->get('appl_id'))
            ->first() ?? new Financing;
        $this->currencies = Currency::all();
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
        $this->financing->total_amount_financing=$this->getAmountFinancing();
        $this->financing->application_id = session()->get('appl_id');
        $this->financing->save();
        session()->flash('success', 'Finanzierung aktualisiert.');
    }

    public function getAmountFinancing() 
    {
        return($this->financing->personal_contribution +
            $this->financing->other_income +
            $this->financing->netto_income +
            $this->financing->assets +
            $this->financing->scholarship);       
    }

    public function convertFinancingToCHF()
    {
        $getAmountFinancing = $this->getAmountFinancing();
        if (is_null($this->financing->currency_id)) {
            return 0;
        }
        else {
            $this->myCurrency = Currency::where('id', $this->financing->currency_id)->first();
            return(
                Converter::convert()
                    ->from($this->myCurrency->abbreviation)
                    ->to('CHF')
                    ->amount($getAmountFinancing)
                    ->round(2)
                    ->get()
            );
        }
    }
}
