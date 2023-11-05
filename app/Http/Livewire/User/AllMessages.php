<?php

namespace App\Http\Livewire\User;

use App\Models\Application;
use App\View\Components\Layout\UserDashboard;
use Livewire\Component;

class AllMessages extends Component
{
    public function render()
    {
        $applications = Application::LoggedInUser()
            ->where('appl_status', '!=', 'not send')
            ->get();

        return view('livewire.user.all-messages', [
            'applications' => $applications,
        ])
            ->layout(UserDashboard::class);
    }
}
