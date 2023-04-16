<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class DarlehenPrivat extends Component
{
    public $currentStep = 1;
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
}
