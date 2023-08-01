<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class DarlehenPrivat extends Component
{
    public $currentStep = 1;
    public $showModal = false;
    public $completeApp;

    protected $listeners = ['completeApp' => 'completeApp'];

    public function completeApp() 
    {
        $this->completeApp = true;
    }

    public function render()
    {
        return view('livewire.user.darlehen-privat');
    }

    public function increaseStep()
    {
        $this->currentStep++;
    }

    public function decreaseStep()
    {
        $this->currentStep--;
    }
    
    public function saveApplication()
    {
        $this->showModal = true;
    }

    public function save()
    {
        $this->emit('sendApplication');
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }
}
