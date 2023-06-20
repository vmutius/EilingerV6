<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Cost;
use Livewire\Component;
use App\Models\Currency;
use App\Models\Financing;

class ReqAmountForm extends Component
{
    public $application;
    
    
    public function render()
    {
        $financing = Financing::where('user_id', auth()->user()->id)
            ->where('application_id', session()->get('appl_id'))
            ->first(['currency_id', 'total_amount_financing']);

        $cost = Cost::where('user_id', auth()->user()->id)
            ->where('application_id', session()->get('appl_id'))
            ->first(['currency_id', 'total_amount_costs']);
        
        $diffAmount = $cost->total_amount_costs - $financing->total_amount_financing;
        $myCurrency = Currency::where('id', $cost->currency_id)->first();

        return view('livewire.antrag.req-amount-form', [
            'financing' => $financing,
            'cost' => $cost,
            'diffAmount' => $diffAmount,
            'myCurrency' => $myCurrency,
        ]);
    }

}
