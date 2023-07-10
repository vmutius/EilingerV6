<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Cost;
use App\Models\User;
use App\Models\Account;
use App\Models\Address;
use App\Models\Parents;
use App\Models\Sibling;
use Livewire\Component;
use App\Models\Education;
use App\Models\Enclosure;
use App\Models\Financing;

class SendingForm extends Component
{
    public $userNoDraft;
    public $addressNoDraft;
    public $abweichendeAddressNoDraft;
    public $educationNoDraft;
    public $costNoDraft;
    public $parentsNoDraft;
    public $siblingNoDraft;
    public $accountNoDraft;
    public $financingNoDraft;
    public $enclosureNoDraft;
 

    public function mount()
    {
        //wenn alle Tabellen is_draft = false zurückliefern, ist alles abgefüllt und der Antrag kann eingereicht werden.
        $this->userNoDraft = (bool)User::where('id', auth()->user()->id)->where('is_draft', false)->exists();
        $this->addressNoDraft = (bool)Address::where('id', auth()->user()->id)->where('is_wochenaufenthalt', 0)->where('is_draft', false)->exists();
        $this->abweichendeAddressNoDraft = (bool)Address::where('id', auth()->user()->id)->where('is_wochenaufenthalt', 1)->where('is_draft', false)->exists();
        $this->educationNoDraft = (bool)Education::where('application_id', session()->get('appl_id'))->where('is_draft', false)->exists();
        $this->accountNoDraft = (bool)Account::where('id', auth()->user()->id)->where('is_draft', false)->exists();
        $this->costNoDraft = (bool)Cost::where('application_id', session()->get('appl_id'))->where('is_draft', false)->exists();
        $this->parentsNoDraft = (bool)Parents::where('id', auth()->user()->id)->where('is_draft', false)->exists();
        $this->siblingNoDraft = (bool)Sibling::where('id', auth()->user()->id)->where('is_draft', false)->exists();
        $this->financingNoDraft = (bool)Financing::where('application_id', session()->get('appl_id'))->where('is_draft', false)->exists();
        $this->enclosureNoDraft = (bool)Enclosure::where('application_id', session()->get('appl_id'))->where('is_draft', false)->exists();

    }

    public function render()
    {   
        return view('livewire.antrag.sending-form');
    }
}
