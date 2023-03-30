<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Country;
use Livewire\Component;
use Illuminate\Validation\Rules\Enum;
use App\Enums\CivilStatus;

class UserNatForm extends Component
{
    public $user;
    public $countries;

    protected function rules() : array
    {   
        return([
            'user.firstname' => 'required',
            'user.lastname' => 'required',
            'user.birthday' => 'required',
            'user.salutation' => 'required',
            'user.nationality' => 'required',
            'user.civil_status' => ['required',new Enum(CivilStatus::class)], 
            'user.in_ch_since' => 'nullable',
            'user.bewilligung' => 'required_if:user.in_ch_since,date',
        ]);
    }

    public function mount()
    {
        $this->user = auth()->user();
        $this->countries = Country::all();
    }

    public function render()
    {
        return view('livewire.antrag.user-nat-form');
    }

    public function saveUserNat()
    {
        $this->validate();
        $this->user->is_draft = false;
        $this->user->save();
        session()->flash('success', 'Benutzerdaten aktualisiert.');
    }

}
