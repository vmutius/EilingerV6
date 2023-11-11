<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MessageNotification extends Component
{
    public $notificationCount;

    public function mount()
    {
        $this->notificationCount = auth()->user()->unreadNotifications();
        $this->getNotificationCount();
    }

    public function getNotificationCount()
    {
        $this->notificationCount = auth()->user()->unreadNotifications()->count();
    }

    public function markAllAsRead()
    {
        auth()->user()->unreadNotifications->markAsRead();
        $this->getNotificationCount();
    }

    public function render()
    {
        return view('livewire.message-notification', [
            'notifications' => auth()->user()->unreadNotifications,
            'count' => $this->notificationCount,
        ]);
    }
}
