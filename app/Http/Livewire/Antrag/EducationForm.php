<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Education;

class EducationForm extends Component
{
    public $education;

    protected $rules = [
        'education.education' => 'nullable',
        'education.name' => 'nullable',
        'education.final' => 'nullable',
        'education.grade' => 'nullable',
        'education.ects_points' => 'nullable',
        'education.time' => 'nullable',
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
        $this->education->user_id = auth()->user()->id;
        $this->education->application_id = session()->get('appl_id');
        $this->education->save();
        session()->flash('success', 'Ausbildungsdaten aktualisiert.');
    }
}
