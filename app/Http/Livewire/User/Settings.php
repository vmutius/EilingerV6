<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Settings extends Component
{
    public function render()
    {
        return view('livewire.user.settings')
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }
}
