<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.login')
            ->layout(\App\View\Components\Layouts\Eilinger::class);
    }
}
