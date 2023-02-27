<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Cost;

class CostForm extends Component
{
    public $cost;

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
            ->where('application_id', session()->get('appl_id'))
            ->first() ?? new Cost;
    }


    public function render()
    {
        return view('livewire.antrag.cost-form');
    }

    public function saveCost()
    {
        $this->cost->user_id = auth()->user()->id;
        $this->cost->application_id = session()->get('appl_id');
        $this->cost->save();
        session()->flash('success', 'Kosten aktualisiert.');
    }

}
