<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Enclosure;

class EnclosureForm extends Component
{
    public $enclosure;

    protected $rules = [
        'enclosure.remark' => 'nullable',
        'enclosure.has_id' => 'nullable',
        'enclosure.has_cv' => 'nullable',
        'enclosure.has_apprenticeship_contract' => 'nullable',
        'enclosure.has_diploma' => 'nullable',
        'enclosure.has_divorce' => 'nullable',
        'enclosure.has_rental_contract' => 'nullable',
        'enclosure.has_certificate_of_study' => 'nullable',
        'enclosure.has_tax_assessment' => 'nullable',
        'enclosure.has_expense_receipts' => 'nullable',
        'enclosure.has_partner_tax_assessment' => 'nullable',
        'enclosure.has_supplementary_services' => 'nullable',
        'enclosure.has_ects_points' => 'nullable',
        'enclosure.has_parents_tax_factors' => 'nullable',
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
        $this->enclosure->application_id = session()->get('appl_id');
        $this->enclosure->save();
        session()->flash('success', 'Beilagen aktualisiert.');
    }

}