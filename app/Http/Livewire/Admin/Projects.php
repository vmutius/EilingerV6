<?php

namespace App\Http\Livewire\Admin;

use App\Models\Application;
use App\View\Components\Layout\AdminDashboard;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $applications = Application::where('appl_status', 'approved')->paginate(10);

        return view('livewire.admin.projects', [
            'applications' => $applications,
        ])->layout(AdminDashboard::class);
    }
}
