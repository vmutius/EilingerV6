<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Currency;
use App\Models\Financing;

class FinancingDarlehenForm extends Component
{
    public $financing;
    public $currencies;

    protected $rules = [
        'financing.required_amount' => 'required|numeric|between:0,100000',
        'financing.payout_plan' => 'required',
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
        return view('livewire.antrag.financing-darlehen-form');
    }

    public function saveFinancingDarlehen()
    {
        $this->validate(); 
        $this->financing->is_draft = false;
        $this->financing->user_id = auth()->user()->id;
        $this->financing->application_id = session()->get('appl_id');
        $this->financing->save();
        session()->flash('success', 'Finanzierung aktualisiert.');
    }
}
