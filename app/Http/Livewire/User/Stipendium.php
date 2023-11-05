<?php

namespace App\Http\Livewire\User;

use App\Models\Application;
use Livewire\Component;

class Stipendium extends Component
{
    public $currentStep = 1;

    public $showModal = false;

    public $completeApp;

    public $isInitialAppl;

    protected $listeners = ['completeApp' => 'completeApp'];

    public function mount()
    {
        $this->isInitialAppl = Application::where('id', session()->get('appl_id'))->first(['is_first'])->is_first;
    }

    public function completeApp()
    {
        $this->completeApp = true;
    }

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
