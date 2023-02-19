<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Application;

class Applications extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $applications=Application::whereIn('appl_status', array('pending', 'waiting', 'complete'))->paginate(10);
        return view('livewire.admin.applications',[
            'applications' => $applications
        ])
            ->layout(\App\View\Components\Layouts\AdminDashboard::class);
    }
}
