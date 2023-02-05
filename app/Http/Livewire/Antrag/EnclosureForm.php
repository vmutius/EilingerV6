<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Enclosure;

class EnclosureForm extends Component
{
    public $enclosure;

    protected $listeners = ['applicationSaved' => 'enclosureApplicationId'];

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
        $this->enclosure = Enclosure::whereNull('application_id')
            ->first() ?? new Enclosure;
    }

    public function render()
    {
        return view('livewire.antrag.enclosure-form');
    }

    public function saveEnclosure()
    {
        $this->enclosure->save();
        session()->flash('message', 'Beilagen aktualisiert.');
    }

    public function enclosureApplicationId() {
        $parent->application_id = $application->id;    
        $parent->save();
    }
}