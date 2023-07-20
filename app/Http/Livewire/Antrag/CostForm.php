<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Cost;
use App\Models\Currency;
use Livewire\Component;
use AmrShawky\LaravelCurrency\Facade\Currency as Converter;


class CostForm extends Component
{
    public $cost;
    public $currencies;
    public $myCurrency;

    protected function rules() : array
    {   
        return([
            'cost.currency_id' => 'required',
            'cost.semester_fees' => 'required|numeric|between:0,100000',
            'cost.fees' => 'required|numeric|between:0,100000',
            'cost.educational_material' => 'required|numeric|between:0,100000',
            'cost.excursion' => 'required|numeric|between:0,100000',
            'cost.travel_expenses' => 'required|numeric|between:0,100000',
            'cost.cost_of_living_with_parents' => 'nullable|required_without_all:cost.cost_of_living_alone,cost.cost_of_living_single_parent,cost.cost_of_living_with_partner|numeric',
            'cost.cost_of_living_alone' => 'nullable|required_without_all:cost.cost_of_living_with_parents,cost.cost_of_living_single_parent,cost.cost_of_living_with_partner|numeric',
            'cost.cost_of_living_single_parent' => 'nullable|required_without_all:cost.cost_of_living_with_parents,cost.cost_of_living_alone,cost.cost_of_living_with_partner|numeric',
            'cost.cost_of_living_with_partner' => 'nullable|required_without_all:cost.cost_of_living_with_parents,cost.cost_of_living_alone,cost.cost_of_living_single_parent|numeric',
            'cost.number_of_children' => 'required|numeric|between:0,100',
        ]);
    }

    public function mount()
    {
        $this->cost = Cost::where('application_id', session()->get('appl_id'))
            ->first() ?? new Cost;
        $this->currencies = Currency::all();
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
        $this->cost->total_amount_costs=$this->getAmountCost();
        $this->cost->application_id = session()->get('appl_id');
        $this->cost->save();
        session()->flash('success', 'Kosten aktualisiert.');
    }

    public function getAmountCost() 
    {
        return($this->cost->semester_fees +
            $this->cost->fees +
            $this->cost->educational_material +
            $this->cost->excursion +
            $this->cost->travel_expenses +
            $this->cost->cost_of_living_with_parents +
            $this->cost->cost_of_living_alone +
            $this->cost->cost_of_living_single_parent +
            $this->cost->cost_of_living_with_partner);           
    }

    public function convertCostToCHF()
    {
        $getAmountFinancing = $this->getAmountCost();
        if (is_null($this->cost->currency_id)) {
            return 0;
        }
        else {
            $this->myCurrency = Currency::where('id', $this->cost->currency_id)->first();
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