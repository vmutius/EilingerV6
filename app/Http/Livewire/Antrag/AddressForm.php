<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Country;
use App\Models\Address;

class AddressForm extends Component
{
    public Address $address;
    public $countries;
   
    protected $rules = [
        'address.street' => 'nullable',
        'address.number' => 'nullable',
        'address.town' => 'nullable',
        'address.plz' => 'nullable',
        'address.country' => 'nullable',
    ];

    public function mount(Address $address) 
    {
        $this->countries = Country::all();
        $this->address = Address::where('user_id', auth()->user()->id)
            ->where('application_id', session()->get('appl_id'))            
            ->first();
    }


    public function render()
    {
        return view('livewire.antrag.address-form');
    }

    public function saveAddress()
    {
        $this->address->application_id = session()->get('appl_id');
        $this->address->save();
        session()->flash('message', 'Adresse aktualisiert.');
    }

}
