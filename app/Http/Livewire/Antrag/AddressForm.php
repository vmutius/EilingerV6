<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Country;
use App\Models\Address;
 

class AddressForm extends Component
{
    public $address;
    public $countries;

   
    protected $rules = [
        'address.street' => 'required|min:3',
        'address.number' => 'nullable',
        'address.town' => 'required',
        'address.plz' => 'required',
        'address.country' => 'required',
    ];

    public function mount(Address $address) 
    {
        $this->countries = Country::all();
        $this->address = Address::where('user_id', auth()->user()->id)  
            ->first();
    }


    public function render()
    {
        return view('livewire.antrag.address-form');
    }

    public function saveAddress()
    {
        //$this->emit('validated');
        $this->address->save();
        session()->flash('success', 'Adresse aktualisiert.');
       
    }

}
