<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Financing;
use Livewire\Component;

class FinancingForm extends Component
{
    public $financing;

    protected $rules = [
        'financing.user_id' => 'nullable',
        'financing.personal_contribution' => 'nullable',
        'financing.other_income' => 'nullable',
        'financing.income_where' => 'nullable',
        'financing.income_who' => 'nullable',
        'financing.netto_income' => 'nullable',
        'financing.assets' => 'nullable',
        'financing.scholarship' => 'nullable',
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
        $this->financing->user_id = auth()->user()->id;
        $this->financing->application_id = session()->get('appl_id');
        $this->financing->save();
        session()->flash('success', 'Finanzierung aktualisiert.');
    }
}
