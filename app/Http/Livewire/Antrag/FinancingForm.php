<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Financing;
use Livewire\Component;

class FinancingForm extends Component
{
    public $financing;

    protected $rules = [
        'financing.user_id' => 'required|numeric|between:0,100000',
        'financing.personal_contribution' => 'required|numeric|between:0,100000',
        'financing.other_income' => 'required|numeric|between:0,100000',
        'financing.income_where' => 'required',
        'financing.income_who' => 'required',
        'financing.netto_income' => 'required|numeric|between:0,100000',
        'financing.assets' => 'required|numeric|between:0,100000',
        'financing.scholarship' => 'required|numeric|between:0,100000',
    ];

    public function mount()
    {
        $this->financing = Financing::where('user_id', auth()->user()->id)
            ->where('application_id', session()->get('appl_id'))
            ->first() ?? new Financing;
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
        $this->financing->application_id = session()->get('appl_id');
        $this->financing->save();
        session()->flash('success', 'Finanzierung aktualisiert.');
    }
}
