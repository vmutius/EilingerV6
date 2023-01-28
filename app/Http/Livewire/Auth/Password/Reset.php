<?php

namespace App\Http\Livewire\Auth\Password;

use Livewire\Component;

class Reset extends Component
{
    public function render()
    {
        return view('livewire.auth.password.reset')
            ->layout(\App\View\Components\Layouts\Eilinger::class);
    }
}
