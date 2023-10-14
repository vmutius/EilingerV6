<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Application;

class AllMessages extends Component
{
    public function render()
    {
        $applications = Application::LoggedInUser()
        ->where('appl_status','!=', 'not send')                
        ->get();

        return view('livewire.user.all-messages',[
            'applications' => $applications,
            ])
            ->layout(\App\View\Components\Layout\UserDashboard::class); 
    }
}
