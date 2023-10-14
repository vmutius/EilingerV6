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
            ->first();
    }

    public function render()
    {
        return view('livewire.user.message')
            ->layout(\App\View\Components\Layout\UserDashboard::class);
    }
}
