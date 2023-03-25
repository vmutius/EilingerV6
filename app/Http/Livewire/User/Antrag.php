<?php

namespace App\Http\Livewire\User;

use App\Models\Address;
use App\Models\Application;
use Livewire\Component;
use App\Enums\ApplStatus;

class Antrag extends Component
{
    public $currentStep = 1;

    public function mount($application_id)
    {
        $this->application = Application::where('user_id', auth()->user()->id)
            ->first() ?? new Application;
        session(['appl_id' => $application_id]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.user.antrag')
            ->layout(\App\View\Components\Layouts\UserDashboard::class);
    }

    public function SendApplication()
    {
        $this->application->appl_status = ApplStatus::PENDING;
        $this->application->save();
        session()->flash('success', 'Antrag erfolgreich eingereicht.');
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
