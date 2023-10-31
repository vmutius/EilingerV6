<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Parents;
use Livewire\Component;

class ParentForm extends Component
{
    public $parents;

    protected $rules = [
        'parents.*.firstname' => 'nullable',
        'parents.*.parent_type' => 'nullable',
        'parents.*.lastname' => 'nullable',
        'parents.*.birthday' => 'nullable',
        'parents.*.phone' => 'nullable',
        'parents.*.address' => 'nullable',
        'parents.*.plz_ort' => 'nullable',
        'parents.*.since' => 'nullable',
        'parents.*.job_type' => 'nullable',
        'parents.*.job' => 'nullable',
        'parents.*.employer' => 'nullable',
        'parents.*.in_ch_since' => 'nullable',
        'parents.*.married_since' => 'nullable',
        'parents.*.separated_since' => 'nullable',
        'parents.*.divorced_since' => 'nullable',
        'parents.*.death' => 'nullable',
    ];

    public function mount()
    {
        $this->parents = Parents::where('user_id', auth()->user()->id)
            ->get() ?? new Parents();
    }

    public function saveParents()
    {
        $this->parents->each(function ($parent) {
            $parent->is_draft = false;
            $parent->user_id = auth()->user()->id;
            $parent->save();
        });

        session()->flash('success', 'Eltern aktualisiert.');
    }

    public function addParent()
    {
        $this->parents->push(new Parents);
    }

    public function render()
    {
        return view('livewire.antrag.parent-form');
    }
}
