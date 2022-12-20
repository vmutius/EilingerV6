<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DecreaseStep extends Component
{

    public $currentStep;

    public function decreaseStep()
    {
         return $this->currentStep--;
    }

    public function render()
    {
        return view('livewire.decrease-step');
    }
}
