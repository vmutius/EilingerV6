<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Address;
use App\Models\Country;
use Illuminate\Support\Facades\Lang;
use Livewire\Component;

class AbweichendeAddressForm extends Component
{
    public $abweichendeAddress;

    public $countries;

    protected $rules = [
        'abweichendeAddress.street' => 'required',
        'abweichendeAddress.number' => 'nullable',
        'abweichendeAddress.town' => 'required',
        'abweichendeAddress.plz' => 'required',
        'abweichendeAddress.country_id' => 'required',
    ];
    public function validationAttributes(): array
    {
        return Lang::get('address');
    }

    public function mount()
    {
        $this->countries = Country::all();
        $this->abweichendeAddress = Address::loggedInUser()
            ->where('is_wochenaufenthalt', 1)->first() ?? new Address;
    }

    public function render()
    {
        return view('livewire.antrag.abweichende-address-form');
    }

    public function saveAbweichendeAddress()
    {
        $this->validate();
        $this->abweichendeAddress->is_draft = false;
        $this->abweichendeAddress->user_id = auth()->user()->id;
        $this->abweichendeAddress->is_wochenaufenthalt = true;
        $this->abweichendeAddress->save();
        session()->flash('success', 'Adresse Wochenaufenthalt aktualisiert.');
    }
}
