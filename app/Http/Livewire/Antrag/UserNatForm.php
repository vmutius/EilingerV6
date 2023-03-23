<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Country;
use Livewire\Component;

class UserNatForm extends Component
{
    public $user;
    public $countries;

    protected $listeners = ['draftToggled' => 'draftToggled'];

    protected $casts = ['user.birthday' => 'date:dd.mm.YYYY'];

    protected $rules = [
        'user.firstname' => 'required',
        'user.lastname' => 'required',
        'user.birthday' => 'required',
        'user.salutation' => 'required',
        'user.nationality' => 'required',
        'user.civil_status' => 'required', 
        'user.is_draft' => 'required|boolean',
    ];

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
        if(!$this->user->is_draft) {
            $this->validate();
        }
        $this->user->save();
        session()->flash('success', 'Benutzerdaten aktualisiert.');
    }

    public function draftToggled($value)
    {
        if(!$this->user->is_draft) {
            $this->user->is_draft = true;
            $this->user->save();
            $this->validate();
            $this->user->is_draft = false;
            $this->user->save();
        }
    }

}
