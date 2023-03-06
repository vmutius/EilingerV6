<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\User;
use App\Models\Country;

class UserNatForm extends Component
{
    public $user;
    public $countries;
    
    public function mount()
    {
        $this->user = auth()->user();
        $this->countries = Country::all();
    }

    protected $casts = ['user.birthday' => 'date:dd.mm.YYYY',];

    protected $rules = [
        'user.firstname' => 'required',
        'user.lastname' => 'required',
        'user.email' => 'required',
        'user.birthday' => 'nullable', 
        'user.salutation' => 'nullable',
        'user.nationality' => 'nullable',
        'user.telefon' => 'nullable',
        'user.mobile' => 'nullable',
        'user.soz_vers_nr' => 'nullable',
        'user.in_ch_since' => 'nullable',
        'user.bewilligung' => 'nullable',
    ];

    public function render()
    {   
        return view('livewire.antrag.user-nat-form');
    }

    public function saveUserNat()
    {
        $this->user->save();
        session()->flash('success', 'Benutzerdaten aktualisiert.');
    }

}
