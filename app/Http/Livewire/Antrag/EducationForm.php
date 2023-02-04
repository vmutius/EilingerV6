<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Education;

class EducationForm extends Component
{
    public Education $education;

    protected $rules = [
        'education.education' => 'nullable',
        'education.name' => 'nullable',
        'education.final' => 'nullable',
        'education.grade' => 'nullable',
        'education.ects-points' => 'nullable',
        'education.time' => 'nullable',
    ];

    public function mount() 
    {
        $this->education = Education::where('user_id', auth()->user()->id)
            ->whereNull('application_id')
            ->first() ?? new Education;
    }

    public function render()
    {
        return view('livewire.antrag.education-form');
    }

    public function save()
    {
        $this->education->user_id = auth()->user()->id;
        $this->education->save();
        session()->flash('message', 'Ausbildungsdaten aktualisiert.');
    }
}
