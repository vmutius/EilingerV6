<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Parents;

class ParentForm extends Component
{
    public Parents $mother;
    public Parents $father;
    public Parents $stepmother;
    public Parents $stepfather;
    
    protected $rules = [
        'mother.firstname' => 'nullable',
        'mother.lastname' => 'nullable',
        'mother.birthday' => 'nullable',
        'mother.telefon' => 'nullable',
        'mother.address' => 'nullable',
        'mother.plz_ort' => 'nullable',
        'mother.since' => 'nullable',
        'mother.job_type' => 'nullable',
        'mother.job' => 'nullable',
        'mother.employer' => 'nullable',
        'mother.inCHsince' => 'nullable',
        'mother.marriedSince' => 'nullable',
        'mother.separatedSince' => 'nullable',
        'mother.divorcedSince' => 'nullable',
        'mother.death' => 'nullable',
        'father.lastname' => 'nullable',
        'father.firstname' => 'nullable',
        'father.birthday' => 'nullable',
        'father.telefon' => 'nullable',
        'father.address' => 'nullable',
        'father.plz_ort' => 'nullable',
        'father.since' => 'nullable',
        'father.job_type' => 'nullable',
        'father.job' => 'nullable',
        'father.employer' => 'nullable',
        'father.inCHsince' => 'nullable',
        'father.marriedSince' => 'nullable',
        'father.separatedSince' => 'nullable',
        'father.divorcedSince' => 'nullable',
        'father.death' => 'nullable',
        'stepmother.lastname' => 'nullable',
        'stepmother.firstname' => 'nullable',
        'stepmother.address' => 'nullable',
        'stepmother.plz_ort' => 'nullable',
        'stepmother.employer' => 'nullable',
        'stepfather.lastname' => 'nullable',
        'stepfather.firstname' => 'nullable',
        'stepfather.address' => 'nullable',
        'stepfather.plz_ort' => 'nullable',
        'stepfather.employer' => 'nullable',
    ];

    public function mount() 
    {
        $this->mother = Parents::where('user_id', auth()->user()->id)
            ->where('parent_type', 'mother')
            ->whereNull('application_id')
            ->first() ?? new Parents;
        $this->father = Parents::where('user_id', auth()->user()->id)
            ->where('parent_type', 'father')
            ->whereNull('application_id')
            ->first() ?? new Parents;
        $this->stepmother = Parents::where('user_id', auth()->user()->id)
            ->where('parent_type', 'stepmother')
            ->whereNull('application_id')
            ->first() ?? new Parents;
        $this->stepfather = Parents::where('user_id', auth()->user()->id)
            ->where('parent_type', 'stepfather')
            ->whereNull('application_id')
            ->first() ?? new Parents;
    }

    public function save()
    {
        $this->mother->user_id = auth()->user()->id;
        $this->mother->parent_type = 'mother';
        $this->mother->save();
        $this->father->user_id = auth()->user()->id;
        $this->father->parent_type = 'father';
        $this->father->save();
        $this->stepmother->user_id = auth()->user()->id;
        $this->stepmother->parent_type = 'stepmother';
        $this->stepmother->save();
        $this->stepfather->user_id = auth()->user()->id;
        $this->stepfather->parent_type = 'stepfather';
        $this->stepfather->save();
        session()->flash('message', 'Eltern aktualisiert.');
    }

    public function render()
    {
        return view('livewire.antrag.parent-form');
    }
}
