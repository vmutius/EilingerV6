<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\User;
use App\Models\Country;

class UserJurForm extends Component
{
    public $user;
    public $countries;
    
    public function mount()
    {
        $this->user = auth()->user();
        $this->countries = Country::all();
    }

    protected $rules = [
        'user.nameInst' => 'required',
        'user.telefonInst' => 'nullable',
        'user.emailInst' => 'required',
        'user.website' => 'required',
        'user.firstname' => 'required',
        'user.lastname' => 'required',
        'user.email' => 'required',
        'user.salutation' => 'nullable',
        'user.telefon' => 'nullable',
        'user.mobile' => 'nullable',

    ];
    
    public function render()
    {
        return view('livewire.antrag.user-jur-form');
    }

    public function saveUserJur()
    {
        $this->user->save();
        session()->flash('success', 'Benutzerdaten aktualisiert.');
    }



}
