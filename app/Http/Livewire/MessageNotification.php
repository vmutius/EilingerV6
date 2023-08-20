<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MessageNotification extends Component
{
    
    
    public function render()
    {
        return view('livewire.message-notification', [
            'notifications' => auth()->user()->unreadNotifications,
        ]);
    }
}
