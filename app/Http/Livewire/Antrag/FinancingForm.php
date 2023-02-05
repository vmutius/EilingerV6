<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Financing;

class FinancingForm extends Component
{
    public $financing;

    protected $listeners = ['applicationSaved' => 'financingApplicationId'];

    protected $rules = [
        'financing.user_id' => 'nullable',
        'financing.personalContribution' => 'nullable',
        'financing.otherIncome' => 'nullable',
        'financing.incomeWhere' => 'nullable',
        'financing.incomeWho' => 'nullable',
        'financing.nettoIncome' => 'nullable',
        'financing.assets' => 'nullable',
        'financing.scholarship' => 'nullable',
    ];

    public function mount() 
    {
        $this->financing = Financing::where('user_id', auth()->user()->id)
            ->whereNull('application_id')
            ->first() ?? new Financing;
    }

    public function render()
    {
        return view('livewire.antrag.financing-form');
    }

    public function saveFinancing()
    {
        $this->financing->user_id = auth()->user()->id;
        $this->financing->save();
        session()->flash('message', 'Finanzierung aktualisiert.');
    }

    public function financingApplicationId() {
        $parent->application_id = $application->id;    
        $parent->save();
    }
}
