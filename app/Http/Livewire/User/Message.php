<?php

namespace App\Http\Livewire\User;

use App\Models\Application;
use App\View\Components\Layout\UserDashboard;
use Livewire\Component;

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
            ->layout(UserDashboard::class);
    }
}
