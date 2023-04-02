<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Application;

class Message extends Component
{
    public $application;
    
    public function mount($application_id)
    {
        $this->application = Application::where('id', $application_id)
            ->with('messages')    
            ->get();
    }

    public function render()
    {
        return view('livewire.user.message', [
            'application' => $this->application,
        ])
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }
}
