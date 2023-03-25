<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\User;
use App\Models\Address;
use App\Models\Education;

class SendingForm extends Component
{
    public $userDraft;
    public $addressDraft;
    public $abweichendeAddressDraft;
    public $educationDraft;

    public function mount()
    {
        $this->userDraft = (bool)User::where('id', auth()->user()->id)->get('is_draft');
        $this->addressDraft = (bool)Address::where('id', auth()->user()->id)->where('is_wochenaufenthalt', 0)->get('is_draft');
        $this->abweichendeAddressDraft = (bool)Address::where('id', auth()->user()->id)->where('is_wochenaufenthalt', 1)->get('is_draft');
        $this->educationDraft = (bool)Education::where('application_id', session()->get('appl_id'))->get('is_draft');
    }

    public function render()
    {   
        return view('livewire.antrag.sending-form');
    }
}
