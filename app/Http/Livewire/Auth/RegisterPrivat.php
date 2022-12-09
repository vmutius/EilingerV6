<?php

namespace App\Http\Livewire\Auth;

use App\Models\Country;
use Livewire\Component;

class RegisterPrivat extends Component
{
    public function render()
    {
        $countries = Country::all();
        return view('livewire.auth.register_privat', compact('countries'))
            ->layout(\App\View\Components\Layouts\Eilinger::class);
    }
}
