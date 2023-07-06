<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Enclosure;
use App\Models\Application;
use Livewire\WithFileUploads;

class EnclosureForm extends Component
{
    use WithFileUploads;
    public $enclosure;
    public $filePath;
    public $UserName;
    public $isInitialAppl;
    public $certificate_of_study;
    public $tax_assessment;
    public $expense_receipts;
    public $partner_tax_assessment;
    public $supplementary_services;
    public $ects_points;
    public $parents_tax_factors;
    

    protected $rules = [
        'enclosure.remark' => 'nullable',
        'certificate_of_study' => 'required_if:enclosure.certificate_of_study,null',
        'enclosure.certificate_of_study' => 'required|mimes:png,jpg,jpeg,pdf|max:2048', 
        'tax_assessment' => 'required_if:enclosure.tax_assessment,null',
        'enclosure.tax_assessment' => 'required|mimes:png,jpg,jpeg,pdf|max:2048', 
        'expense_receipts' => 'required_if:enclosure.expense_receipts,null',
        'enclosure.expense_receipts' => 'required|mimes:png,jpg,jpeg,pdf|max:2048', 
        'partner_tax_assessment' => 'nullable|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.partner_tax_assessment' => 'nullable|mimes:png,jpg,jpeg,pdf|max:2048', 
        'supplementary_services' => 'nullable|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.supplementary_services' => 'nullable|mimes:png,jpg,jpeg,pdf|max:2048', 
        'ects_points' => 'nullable|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.ects_points' => 'nullable|mimes:png,jpg,jpeg,pdf|max:2048', 
        'parents_tax_factors' => 'required_if:enclosure.parents_tax_factors,null',
        'enclosure.parents_tax_factors' => 'required|mimes:png,jpg,jpeg,pdf|max:2048', 
    ];

    public function messages()
    {
        return [
            'certificate_of_study' => 'Semesterbestätigung/ Studienbescheinigung muss hochgeladen werden',
            'tax_assessment' => 'Kopie der neuesten Steuerveranlagung muss hochgeladen werden',
            'expense_receipts'  => 'Kostenbelege müssen hochgeladen werden',
            'parents_tax_factors' => 'Steuerfaktoren der Eltern müssen hochgeladen werden',
        ];
    }

    public function mount()
    {
        $lastname = auth()->user()->lastname;
        $firstname = auth()->user()->firstname;
        $this->UserName = $lastname . '_' . $firstname;
        $this->enclosure = Enclosure::where('application_id', session()->get('appl_id'))
            ->first() ?? new Enclosure;
        $this->isInitialAppl = Application::where('id', session()->get('appl_id'))->first(['is_first'])->is_first;

    }

    public function render()
    {
        return view('livewire.antrag.enclosure-form');
    }

    public function saveEnclosure()
    {
        $this->validate(); 
        $file_certificate_of_study = $this->upload($this->certificate_of_study,'certificate_of_study');
        $this->enclosure->certificate_of_study = $file_certificate_of_study;
        $file_tax_assessment = $this->upload($this->tax_assessment, 'tax_assessment');
        $this->enclosure->tax_assessment = $file_tax_assessment;
        $file_expense_receipts = $this->upload($this->expense_receipts, 'expense_receipts');
        $this->enclosure->expense_receipts = $file_expense_receipts;
        $file_partner_tax_assessment = $this->upload($this->partner_tax_assessment, 'partner_tax_assessment');
        $this->enclosure->partner_tax_assessment = $file_partner_tax_assessment;
        $file_supplementary_services = $this->upload($this->supplementary_services, 'supplementary_services');
        $this->enclosure->supplementary_services = $file_supplementary_services;
        $file_ects_points = $this->upload($this->ects_points, 'ects_points');
        $this->enclosure->ects_points = $file_ects_points;
        $file_parents_tax_factors = $this->upload($this->parents_tax_factors, 'parents_tax_factors');
        $this->enclosure->parents_tax_factors = $file_parents_tax_factors;
        $this->enclosure->is_draft = false;
        $this->enclosure->application_id = session()->get('appl_id');
        $this->enclosure->save();
        session()->flash('success', 'Beilagen aktualisiert.');
    }

    public function upload($type,$text) {
        if(!is_null($type)) {
            $appl_id = session()->get('appl_id');
            $fileName = "Appl" . $appl_id . '_' . $text . '.' . $type->getClientOriginalExtension();;
            $file = $type->storeAs($this->UserName, $fileName, 'uploads');
            return $file;
        }
    }
}
