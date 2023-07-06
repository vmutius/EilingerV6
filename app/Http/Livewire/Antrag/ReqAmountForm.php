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

    protected function rules() : array
    {   
        return([
            'application.req_amount' => 'required|numeric',
        ]);
    }

    public function mount()
    {
        $this->application = Application::where('id', session()->get('appl_id'))->first();
    }
    
    
    public function render()
    {
        $financing = Financing::where('user_id', auth()->user()->id)
            ->where('application_id', session()->get('appl_id'))
            ->first(['currency_id', 'total_amount_financing']);

        $cost = Cost::where('user_id', auth()->user()->id)
            ->where('application_id', session()->get('appl_id'))
            ->first(['currency_id', 'total_amount_costs']);
        
        if(!is_null($cost) && !is_null($financing)){
            $diffAmount = $cost->total_amount_costs - $financing->total_amount_financing;
            $myCurrency = Currency::where('id', $cost->currency_id)->first();
        } else {
            $diffAmount = 0.00;
            $myCurrency = 'XXX';
        }

        return view('livewire.antrag.req-amount-form', [
            'financing' => $financing,
            'cost' => $cost,
            'diffAmount' => $diffAmount,
            'myCurrency' => $myCurrency,
        ]);
    }

    public function saveReqAmount() 
    {
        $this->application->save();
        session()->flash('success', 'Gewünschter Betrag aktualisiert.');
    }

}
