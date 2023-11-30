<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Address;
use App\Models\Country;
use Illuminate\Support\Facades\Lang;
use Livewire\Component;

class AboardAddressForm extends Component
{
    public $aboardAddress;

    public $countries;

    protected $rules = [
        'aboardAddress.street' => 'required',
        'aboardAddress.number' => 'nullable',
        'aboardAddress.town' => 'required',
        'aboardAddress.plz' => 'required',
        'aboardAddress.country_id' => 'required',
    ];

    public function validationAttributes(): array
    {
        return Lang::get('address');
    }

    public function mount()
    {
        $this->countries = Country::all();
        $this->aboardAddress = Address::loggedInUser()
            ->where('is_aboard', 1)->first() ?? new Address;
    }

    public function render()
    {
        return view('livewire.antrag.aboard-address-form');
    }

    public function saveaboardAddress()
    {
        $this->validate();
        $this->aboardAddress->is_draft = false;
        $this->aboardAddress->user_id = auth()->user()->id;
        $this->aboardAddress->is_aboard = true;
        $this->aboardAddress->save();
        session()->flash('success', 'Adresse im Ausland aktualisiert.');
    }
}
