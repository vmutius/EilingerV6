<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ToogleDraft extends Component
{
    public Model $model;

    public $status_id;

    public function mount()
    {
        $this->status = $this->model->getAttribute($this->status_id);
    }
    
    public function render()
    {
        return view('livewire.toogle-draft');
    }

    public function updating($value)
    {
        $this->model->setAttribute($this->status_id, $value)->save();
    }
}
