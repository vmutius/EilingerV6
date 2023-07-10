<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Uebersicht extends Component
{
    public function render()
    {
        return view('livewire.user.uebersicht')
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }
}
