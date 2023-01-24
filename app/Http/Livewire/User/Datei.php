<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Datei extends Component
{
    public function render()
    {
        return view('livewire.user.datei')
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }
}
