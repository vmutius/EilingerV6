<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Verify extends Component
{
    public function render()
    {
        return view('livewire.auth.verify')
            ->layout(\App\View\Components\Layouts\Eilinger::class);
    }
}
