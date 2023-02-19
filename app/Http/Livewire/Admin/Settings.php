<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Settings extends Component
{
    public function render()
    {
        return view('livewire.admin.settings')
            ->layout(\App\View\Components\Layouts\AdminDashboard::class);
    }
}
