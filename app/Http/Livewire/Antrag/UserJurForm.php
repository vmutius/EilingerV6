<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;

class UserJurForm extends Component
{
    //protected $listeners = ['applicationSaved' => 'SiblingApplicationId'];
    
    public function render()
    {
        return view('livewire.antrag.user-jur-form');
    }

}
