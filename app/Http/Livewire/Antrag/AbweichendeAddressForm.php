<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Country;
use App\Models\Address;

class AbweichendeAddressForm extends Component
{
    public $abweichendeAddress;
    public $countries;

    protected $listeners = ['applicationSaved' => 'abwAddrApplicationId'];

    protected $rules = [
        'abweichendeAddress.street' => 'nullable',
        'abweichendeAddress.number' => 'nullable',
        'abweichendeAddress.town' => 'nullable',
        'abweichendeAddress.plz' => 'nullable',
        'abweichendeAddress.country' => 'nullable',
    ];

    public function mount() 
    {
        $this->countries = Country::all();
        $this->abweichendeAddress = Address::where('user_id', auth()->user()->id)
            ->where('isWochenaufenthalt', 1)->first() ?? new Address;
    }

    public function render()
    {
        return view('livewire.antrag.abweichende-address-form');
    }

    public function saveAbweichendeAddress()
    {
        $this->abweichendeAddress->user_id = auth()->user()->id;
        $this->abweichendeAddress->isWochenaufenthalt = true;
        $this->abweichendeAddress->save();
        session()->flash('message', 'Adresse Wochenaufenthalt aktualisiert.');
    }

    public function abwAddrApplicationId() {
        $parent->application_id = $application->id;    
        $parent->save();
    }
}
