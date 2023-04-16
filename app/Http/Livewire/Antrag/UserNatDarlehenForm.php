<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;

class UserNatDarlehenForm extends Component
{
    public $user;

    protected function rules() : array
    {   
        return([
            'user.firstname' => 'required',
            'user.lastname' => 'required',
            'user.birthday' => 'required|date',
            'user.salutation' => 'required',
            'user.telefon' => 'required',
            'user.mobile' => 'sometimes',
            
        ]);
    }

    public function mount()
    {
        $this->user = auth()->user();
    }
    
    public function render()
    {
        return view('livewire.antrag.user-nat-darlehen-form');
    }

    public function saveUserNat()
    {
        $this->validate();
        $this->user->is_draft = false;
        $this->user->save();
        session()->flash('success', 'Benutzerdaten aktualisiert.');
    }
}
