<?php

namespace App\Http\Livewire\Admin;

use App\Models\Application;
use App\View\Components\Layout\AdminDashboard;
use Livewire\Component;
use Livewire\WithPagination;

class Applications extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $applications = Application::whereIn('appl_status', ['pending', 'waiting', 'complete'])->paginate(10);

        return view('livewire.admin.applications', [
            'applications' => $applications,
        ])
            ->layout(AdminDashboard::class);
    }
}
