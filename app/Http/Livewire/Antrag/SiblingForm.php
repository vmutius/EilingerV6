<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Sibling;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class SiblingForm extends Component
{
    public $siblings;

    protected $rules = [
        'siblings.*.birth_year' => 'nullable',
        'siblings.*.lastname' => 'nullable',
        'siblings.*.firstname' => 'nullable',
        'siblings.*.education' => 'nullable',
        'siblings.*.graduation_year' => 'nullable',
        'siblings.*.place_of_residence' => 'nullable',
        'siblings.*.get_amount' => 'nullable',
        'siblings.*.support_site' => 'nullable',
    ];

    public function mount()
    {
        $this->siblings = Sibling::where('user_id', auth()->user()->id)
            ->get() ?? new Collection;
    }

    public function render()
    {
        return view('livewire.antrag.sibling-form');
    }

    public function saveSiblings()
    {
        $this->siblings->each(function ($sibling) {
            $sibling->user_id = auth()->user()->id;
            $sibling->save();
        });

        session()->flash('success', 'Geschwister aktualisiert.');
    }

    public function addSibling()
    {
        $this->siblings->push(new Sibling);
    }
}
