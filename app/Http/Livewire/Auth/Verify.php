<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Foundation\Auth\VerifiesEmails;

class Verify extends Component
{
    use VerifiesEmails;

    public function render()
    {
        return view('livewire.auth.verify')
            ->layout(\App\View\Components\Layouts\Eilinger::class);
    }

    public function mount()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
