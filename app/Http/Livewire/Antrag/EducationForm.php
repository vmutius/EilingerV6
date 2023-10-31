<?php

namespace App\Http\Livewire\Antrag;

use App\Enums\Education;
use App\Enums\Grade;
use App\Enums\Time;
use App\Models\Education as EducationModel;
use Illuminate\Validation\Rules\Enum;
use Livewire\Component;

class EducationForm extends Component
{
    public $education;

    public function mount()
    {
        $this->education = EducationModel::loggedInUser()
            ->where('application_id', session()->get('appl_id'))
            ->first() ?? new EducationModel;
    }

    public function render()
    {
        return view('livewire.antrag.education-form');
    }

    public function saveEducation()
    {

        $this->validate();
        $this->education->is_draft = false;
        $this->education->user_id = auth()->user()->id;
        $this->education->application_id = session()->get('appl_id');
        $this->education->save();
        session()->flash('success', 'Ausbildungsdaten aktualisiert.');
    }

    protected function rules(): array
    {
        return [
            'education.education' => ['required', new Enum(Education::class)],
            'education.name' => 'required',
            'education.final' => 'required',
            'education.grade' => ['required', new Enum(Grade::class)],
            'education.ects_points' => 'required',
            'education.time' => ['required', new Enum(Time::class)],
        ];
    }
}
