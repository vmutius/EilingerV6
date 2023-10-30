<?php

namespace App\Http\Livewire\User;

use App\View\Components\Layout\UserDashboard;
use Livewire\Component;
use App\Models\Application;

class Gesuch extends Component
{
    public function render()
    {
        $applications = Application::LoggedInUser()
        ->where('appl_status','!=', 'not send')
        ->get();

        return view('livewire.user.gesuch', [
            'applications' => $applications,
        ])
            ->layout(UserDashboard::class);
    }
}
