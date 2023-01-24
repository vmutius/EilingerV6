<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Gesuch extends Component
{
    public function render()
    {
        return view('livewire.user.gesuch')
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }
}
