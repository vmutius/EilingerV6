<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Application;

class Message extends Component
{
    public $applications;
    
    public function mount()
    {
        $this->applications = Application::where('user_id', auth()->user()->id)
            ->with('messages')
            ->get();
    }
    public function render()
    {
        return view('livewire.user.message', [
            'applications' => $this->applications,
        ])
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }
}
