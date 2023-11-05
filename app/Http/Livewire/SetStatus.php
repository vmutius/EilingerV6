<?php

namespace App\Http\Livewire;

use App\Enums\ApplStatus;
use App\Models\Application;
use Illuminate\Validation\Rules\Enum;
use Livewire\Component;

class SetStatus extends Component
{
    public Application $application;

    protected function rules(): array
    {
        return [
            'application.appl_status' => ['required', new Enum(ApplStatus::class)],
        ];
    }

    public function render()
    {
        return view('livewire.set-status');
    }

    public function setStatus()
    {
        $this->application->save();
        session()->flash('message', 'Status des Antrags gespeichert');
    }
}
