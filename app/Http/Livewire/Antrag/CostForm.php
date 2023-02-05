<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Cost;

class CostForm extends Component
{
    public $cost;

    protected $listeners = ['applicationSaved' => 'costApplicationId'];

    protected $rules = [
        'cost.semesterFees' => 'nullable',
        'cost.fees' => 'nullable',
        'cost.educationalMaterial' => 'nullable',
        'cost.excursion' => 'nullable',
        'cost.travelExpenses' => 'nullable',
        'cost.costOfLivingWithParents' => 'nullable',
        'cost.costOfLivingAlone' => 'nullable',
        'cost.costOfLivingAlone' => 'nullable',
        'cost.costOfLivingWithPartner' => 'nullable',
        'cost.numberOfChildren' => 'nullable',
    ];

    public function mount() 
    {
        $this->cost = Cost::where('user_id', auth()->user()->id)
            ->whereNull('application_id')
            ->first() ?? new Cost;
    }


    public function render()
    {
        return view('livewire.antrag.cost-form');
    }

    public function saveCost()
    {
        $this->cost->user_id = auth()->user()->id;
        $this->cost->save();
        session()->flash('message', 'Kosten aktualisiert.');
    }

    public function costApplicationId() {
        $parent->application_id = $application->id;    
        $parent->save();
    }
}
