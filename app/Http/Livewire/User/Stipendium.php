<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Stipendium extends Component
{
    public $currentStep = 1;

    public function render()
    {
        return view('livewire.user.stipendium');
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
