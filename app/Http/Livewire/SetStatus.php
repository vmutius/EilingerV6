<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Enums\ApplStatus;
use App\Models\Application;
use Illuminate\Validation\Rules\Enum;

class SetStatus extends Component
{
    public $appl_status;

    protected function rules() : array
    {   
        return([
            'appl_status' => ['required',new Enum(ApplStatus::class)],
        ]);
    }

    public function mount(Application $application)
    {
        
        $this->appl_status = $application->appl_status;
    }
    
    public function render()
    {
        return view('livewire.set-status');
    }

    public function setStatus() 
    {
        $application->appl_status = $this->appl_status;
    }
}
