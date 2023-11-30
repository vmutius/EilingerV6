<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Address;
use App\Models\Country;
use Illuminate\Support\Facades\Lang;
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

    public function validationAttributes(): array
    {
        return Lang::get('address');
    }

    public function mount()
    {
        $this->countries = Country::all();
        $this->address = Address::loggedInUser()->first();
    }

    public function render()
    {
        return view('livewire.antrag.address-form');
    }

    public function saveAddress()
    {

        $this->validate();
        $this->address->is_draft = false;
        $this->address->save();
        session()->flash('success', 'Adresse aktualisiert.');
    }
}
