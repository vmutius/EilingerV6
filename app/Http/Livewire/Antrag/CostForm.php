<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Cost;

class CostForm extends Component
{
    public $cost;

    protected $rules = [
        'cost.semester_fees' => 'nullable',
        'cost.fees' => 'nullable',
        'cost.educational_material' => 'nullable',
        'cost.excursion' => 'nullable',
        'cost.travel_expenses' => 'nullable',
        'cost.cost_of_living_with_parents' => 'nullable',
        'cost.cost_of_living_alone' => 'nullable',
        'cost.cost_of_living_alone' => 'nullable',
        'cost.cost_of_living_with_partner' => 'nullable',
        'cost.number_of_children' => 'nullable',
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
