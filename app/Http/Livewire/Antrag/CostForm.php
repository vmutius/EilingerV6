<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Cost;
use Livewire\Component;

class CostForm extends Component
{
    public $cost;

    protected $rules = [
        'cost.semester_fees' => 'required|numeric|between:0,100000',
        'cost.fees' => 'required|numeric|between:0,100000',
        'cost.educational_material' => 'required|numeric|between:0,100000',
        'cost.excursion' => 'required|numeric|between:0,100000',
        'cost.travel_expenses' => 'required|numeric|between:0,100000',
        //'cost.cost_of_living_with_parents' => 'required_without_all:cost_of_living_alone,cost_of_living_single_parent,cost_of_living_with_partner|numeric|between:0,100000',
        //'cost.cost_of_living_alone' => 'required_without_all:cost_of_living_with_parents,cost_of_living_single_parent, cost_of_living_with_partner|numeric|between:0,100000',
        //'cost.cost_of_living_single_parent' => 'required_without_all:cost_of_living_with_parents,cost_of_living_alone,cost_of_living_with_partner|numeric|between:0,100000',
        //'cost.cost_of_living_with_partner' => 'required_without_all:cost_of_living_with_parents,cost_of_living_alone,cost_of_living_single_parent|numeric|between:0,100000',
        'cost.number_of_children' => 'required|numeric|between:0,100000',
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
        $this->validate(); 
        $this->cost->is_draft = false;
        $this->cost->user_id = auth()->user()->id;
        $this->cost->application_id = session()->get('appl_id');
        $this->cost->save();
        session()->flash('success', 'Kosten aktualisiert.');
    }
}
