<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Education;
use Livewire\Component;

class EducationForm extends Component
{
    public $education;

    protected $rules = [
        'education.education' => 'required',
        'education.name' => 'required',
        'education.final' => 'required',
        'education.grade' => 'required',
        'education.ects_points' => 'required',
        'education.time' => 'required',
    ];

    public function mount()
    {
        $this->education = Education::where('user_id', auth()->user()->id)
            ->where('application_id', session()->get('appl_id'))
            ->first() ?? new Education;
    }

    public function render()
    {
        return view('livewire.antrag.education-form');
    }

    public function saveEducation()
    {
        if(!$this->education->is_draft) {
            $this->validate(); 
        }
        $this->education->user_id = auth()->user()->id;
        $this->education->application_id = session()->get('appl_id');
        $this->education->save();
        session()->flash('success', 'Ausbildungsdaten aktualisiert.');
    }
}
