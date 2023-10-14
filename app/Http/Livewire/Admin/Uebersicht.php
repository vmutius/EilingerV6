<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Application;

class Uebersicht extends Component
{
    public function render()
    {   
        $userCount = User::where('is_admin', 0)->count();
        $applicationCount = Application::whereIn('appl_status', ['pending', 'waiting', 'complete'])->count();
        $projectCount = Application::where('appl_status', 'approved')->paginate(10);

        return view('livewire.admin.uebersicht', [
            'userCount' => $userCount,
            'applicationCount' => $applicationCount,
            'projectCount' => $projectCount,
        ])
         ->layout(\App\View\Components\Layout\AdminDashboard::class);;
    }
}
