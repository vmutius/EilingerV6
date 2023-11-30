<?php

namespace App\Http\Livewire;

use App\Enums\ApplStatus;
use App\Models\Application;
use App\Notifications\StatusUpdated;
use Illuminate\Validation\Rules\Enum;
use Livewire\Component;

class SetStatus extends Component
{
    public Application $application;

    public function render()
    {
        return view('livewire.set-status');
    }

    public function setStatus()
    {
        $this->application->save();
        session()->flash('message', 'Status des Antrags gespeichert');

        $this->application->user->notify(new StatusUpdated($this->application));
    }

    protected function rules(): array
    {
        return [
            'application.appl_status' => ['required', new Enum(ApplStatus::class)],
            'application.reason_rejected' => 'required_if:application, ApplStatus::BLOCKED',
        ];
    }
}
