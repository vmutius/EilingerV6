<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Cost;
use Livewire\Component;
use App\Models\Currency;
use App\Models\Financing;
use App\Models\Application;

class ReqAmountForm extends Component
{
    public $application;
    public $reqAmount;
    public $myCurrency;
    public $total_amount_financing;
    public $total_amount_costs;
    public $diffAmount;

    protected function rules() : array
    {   
        return([
            'application.req_amount' => 'required|numeric',
        ]);
    }

    public function mount()
    {
        $this->application = Application::where('id', session()->get('appl_id'))->first();
        $this->myCurrency = Currency::where('id', $this->application->currency_id)->first();
        $this->total_amount_financing = Financing::where('application_id', session()->get('appl_id'))
            ->sum('total_amount_financing');

        $this->total_amount_costs = Cost::where('application_id', session()->get('appl_id'))
            ->sum('total_amount_costs');
    }
    
    
    public function render()
    {
        if(!is_null($this->total_amount_financing) && !is_null($this->total_amount_costs)){
            $this->diffAmount = $this->total_amount_costs - $this->total_amount_financing;
        } else {
            $this->diffAmount = 0.00;
            $this->myCurrency = 'XXX';
        }

        return view('livewire.antrag.req-amount-form');
    }

    public function saveReqAmount() 
    {
        $this->application->calc_amount = $this->diffAmount;
        $this->application->save();
        session()->flash('success', 'Gewünschter Betrag aktualisiert.');
    }

}
