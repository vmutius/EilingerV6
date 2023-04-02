<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class AllMessages extends Component
{
    public function render()
    {
        return view('livewire.user.all-messages')
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }
}
