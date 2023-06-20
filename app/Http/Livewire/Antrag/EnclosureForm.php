<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Enclosure;
use Livewire\WithFileUploads;

class EnclosureForm extends Component
{
    use WithFileUploads;
    public $enclosure;

    protected $rules = [
        'enclosure.remark' => 'nullable',
        'enclosure.passport' => 'required|mimes:png,jpg,jpeg,pdf|max:2048', 
        'enclosure.cv' => 'nullable',
        'enclosure.apprenticeship_contract' => 'nullable',
        'enclosure.diploma' => 'nullable',
        'enclosure.divorce' => 'nullable',
        'enclosure.rental_contract' => 'nullable',
        'enclosure.certificate_of_study' => 'nullable',
        'enclosure.tax_assessment' => 'nullable',
        'enclosure.expense_receipts' => 'nullable',
        'enclosure.partner_tax_assessment' => 'nullable',
        'enclosure.supplementary_services' => 'nullable',
        'enclosure.ects_points' => 'nullable',
        'enclosure.parents_tax_factors' => 'nullable',
    ];

    public function mount()
    {
        $this->enclosure = Enclosure::where('application_id', session()->get('appl_id'))
            ->first() ?? new Enclosure;
    }

    public function render()
    {
        return view('livewire.antrag.enclosure-form');
    }

    public function saveEnclosure()
    {
        $this->validate(); 
        $filename = $this->enclosure.passport->store('/', 'uploads');
        $this->enclosure->passport = $filename;
        $this->enclosure->is_draft = false;
        $this->enclosure->application_id = session()->get('appl_id');
        $this->enclosure->save();
        session()->flash('success', 'Beilagen aktualisiert.');
    }
}
