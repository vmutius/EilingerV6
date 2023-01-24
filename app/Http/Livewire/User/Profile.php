<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.user.profile')
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }
}
