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
    public $userDraft;
    public $addressDraft;
    public $abweichendeAddressDraft;
    public $educationDraft;
    public $costDraft;
    public $parentsDraft;
    public $siblingDraft;
    public $accountDraft;
    public $financingDraft;
    public $enclosureDraft;
 

    public function mount()
    {
        $this->userDraft = (bool)User::where('id', auth()->user()->id)->value('is_draft');
        $this->addressDraft = (bool)Address::where('id', auth()->user()->id)->where('is_wochenaufenthalt', 0)->value('is_draft');
        $this->abweichendeAddressDraft = (bool)Address::where('id', auth()->user()->id)->where('is_wochenaufenthalt', 1)->value('is_draft');
        $this->educationDraft = (bool)Education::where('application_id', session()->get('appl_id'))->value('is_draft');
        $this->accountDraft = (bool)Account::where('id', auth()->user()->id)->value('is_draft');
        $this->costDraft = (bool)Cost::where('application_id', session()->get('appl_id'))->value('is_draft');
        //$this->$parentsDraft = (bool)Parents::where('id', auth()->user()->id)->value('is_draft');
        //$this->$siblingDraft = (bool)Sibling::where('id', auth()->user()->id)->value('is_draft');
        $this->financingDraft = (bool)Financing::where('application_id', session()->get('appl_id'))->value('is_draft');
        $this->enclosureDraft = (bool)Enclosure::where('application_id', session()->get('appl_id'))->value('is_draft');

    }

    public function render()
    {   
        return view('livewire.antrag.sending-form');
    }
}
