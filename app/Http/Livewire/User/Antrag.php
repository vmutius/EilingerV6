<?php

namespace App\Http\Livewire\User;

use App\Models\Address;;
use App\Models\Application;
use Livewire\Component;
use App\Enums\ApplStatus;

class Antrag extends Component
{
    public $currentStep = 1;
    public $application;

    protected $listeners = ['sendApplication' => 'sendApplication'];
    
    public function mount($application_id)
    {
        $this->application = Application::where('id', $application_id)->first();
        session(['appl_id' => $application_id]);
    }

    public function render()
    {
        return view('livewire.user.antrag')
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }

    public function sendApplication()
    {
        $this->application->appl_status = ApplStatus::PENDING;
        $this->application->save();
        redirect()->route('user_gesuche');
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
