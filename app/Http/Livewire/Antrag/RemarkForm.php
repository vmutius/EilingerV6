<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Enclosure;

class RemarkForm extends Component
{
    public $enclosure;
    
    protected $rules = [
        'enclosure.remark' => 'nullable',
    ];

    public function mount()
    {
        $this->enclosure = Enclosure::where('application_id', session()->get('appl_id'))
            ->first() ?? new Enclosure;
    }

    public function render()
    {
        return view('livewire.antrag.remark-form');
    }

    public function saveEnclosure()
    {
        $this->validate(); 
        $this->enclosure->is_draft = false;
        $this->enclosure->application_id = session()->get('appl_id');
        $this->enclosure->save();
        session()->flash('success', 'Beilagen aktualisiert.');
    }
}
