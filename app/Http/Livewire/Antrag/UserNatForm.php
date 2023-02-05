<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\User;
use App\Models\Country;

class UserNatForm extends Component
{
    public User $user;
    public $countries;

    protected $listeners = ['applicationSaved' => 'userNatApplicationId'];
    
    public function mount()
    {
        $this->user = auth()->user();
        $this->countries = Country::all();
    }

    protected $rules = [
        'user.firstname' => 'required',
        'user.lastname' => 'required',
        'user.email' => 'required',
        'user.birthday' => 'nullable', 
        'user.salutation' => 'nullable',
        'user.nationality' => 'nullable',
        'user.telefon' => 'nullable',
        'user.mobile' => 'nullable',
        'user.sozVersNr' => 'nullable',
        'user.birthday' => 'nullable',
        'user.inCHsince' => 'nullable',
        'user.bewilligung' => 'nullable',
    ];

    public function render()
    {   
        return view('livewire.antrag.user-nat-form');
    }

    public function saveUserNat()
    {
        $this->user->save();
    }

    public function userNatApplicationId() {
        $parent->application_id = $application->id;    
        $parent->save();
    }

}
