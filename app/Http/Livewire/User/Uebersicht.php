<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Application;

class Uebersicht extends Component
{
    public function mount()
    {

    }
    
    public function render()
    {
        $applications = Application::where ('user_id', auth()->user()->id)->get();
        return view('livewire.user.uebersicht', [
            'applications' => $applications
        ])
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }
}
