<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Enclosure;

class EnclosureForm extends Component
{
    public $enclosure;

    protected $rules = [
        'enclosure.remark' => 'nullable',
        'enclosure.hasID' => 'nullable',
        'enclosure.hasCV' => 'nullable',
        'enclosure.hasApprenticeshipContract' => 'nullable',
        'enclosure.hasDiploma' => 'nullable',
        'enclosure.hasDivorce' => 'nullable',
        'enclosure.hasRentalContract' => 'nullable',
        'enclosure.hasCertificateOfStudy' => 'nullable',
        'enclosure.hasTaxAssessment' => 'nullable',
        'enclosure.hasExpenseReceipts' => 'nullable',
        'enclosure.hasPartnerTaxAssessment' => 'nullable',
        'enclosure.hasSupplementaryServices' => 'nullable',
        'enclosure.hasECTSPoints' => 'nullable',
        'enclosure.hasParentsTaxFactors' => 'nullable',
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