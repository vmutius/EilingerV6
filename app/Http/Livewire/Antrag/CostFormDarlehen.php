<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Currency;
use App\Models\Application;
use App\Models\CostDarlehen;
use Illuminate\Database\Eloquent\Collection;
use AmrShawky\LaravelCurrency\Facade\Currency as Converter;

class CostFormDarlehen extends Component
{
    public $costs;
    public $currency_id;
    public $myCurrency;
    public $getAmountCostDarlehen;

    protected $rules = [
        'costs.*.cost_name' => 'required',
        'costs.*.cost_amount' => 'required|numeric|between:0,100000',
    ];

    public function mount()
    {
        $this->costs = CostDarlehen::where('application_id', session()->get('appl_id'))->get() ?? new Collection;
        $this->currency_id = Application::where('id', session()->get('appl_id'))->pluck('currency_id');
        $this->myCurrency = Currency::where('id', $this->currency_id)->first();
    }


    public function render()
    {
        return view('livewire.antrag.cost-form-darlehen');
    }

    public function saveCostDarlehen()
    {
        $this->validate(); 

        $this->costs->each(function ($cost) {
            $cost->is_draft = false;
            $cost->user_id = auth()->user()->id;
            $cost->application_id = session()->get('appl_id');
            $cost->save();
        });
        
        session()->flash('success', 'Kosten aktualisiert.');
    }

    public function getAmountCostDarlehen() 
    {
        $this->getAmountCostDarlehen = '0.00';
        $this->costs->each(function ($cost) {
            $this->getAmountCostDarlehen += $cost->cost_amount;
        });

        return $this->getAmountCostDarlehen;
    }

    public function convertCostToCHF()
    {
        $this->getAmountCostDarlehen = $this->getAmountCostDarlehen();
        return(
            Converter::convert()
                ->from($this->myCurrency->abbreviation)
                ->to('CHF')
                ->amount($this->getAmountCostDarlehen)
                ->round(2)
                ->get()
        );
    }

    public function addCostDarlehen()
    {
        $this->costs->push(new CostDarlehen);
    }


}
