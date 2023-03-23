<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Address;
use App\Models\Country;
use Livewire\Component;

class AddressForm extends Component
{
    public $address;
    public $countries;

    protected $rules = [
        'address.street' => 'required|min:3',
        'address.number' => 'nullable',
        'address.town' => 'required|min:3',
        'address.plz' => 'required|min:4',
        'address.country_id' => 'required',
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
        if(!$this->address->is_draft) {
            $this->validate(); 
        }
        $this->address->save();
        session()->flash('success', 'Adresse aktualisiert.');
    }
}
