<?php

namespace App\Http\Livewire\User;

use App\View\Components\Layout\UserDashboard;
use Livewire\Component;

class Uebersicht extends Component
{
    public function render()
    {
        return view('livewire.user.uebersicht')
            ->layout(UserDashboard::class);
    }
}
