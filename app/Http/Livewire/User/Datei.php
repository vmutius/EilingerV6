<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Application;

class Datei extends Component
{
    public $showModal = false;
    public $enclosure;
    public $applications;

    protected function rules() : array
    {   
        return([
            
        ]);
    }

    public function mount() 
    {
        $this->applications = Application::LoggedInUser()->get();
    }

    public function render()
    {
        return view('livewire.user.datei')
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }

    public function addEnclosure()
    {
        $this->showModal = true;
    }

    public function close()
    {
        $this->showModal = false;
    }

}
