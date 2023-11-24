<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Application;
use App\Models\Enclosure;
use App\Rules\FileUploadRule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class EnclosureFormStipendiumFolge extends Component
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

    public $passport;

    public $cv;

    public $apprenticeship_contract;

    public $diploma;

    public $divorce;

    public $rental_contract;

    protected $rules = [
        'enclosure.remark' => 'nullable',
        'certificate_of_study' => 'required_if:enclosure.certificate_of_study,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.certificate_of_study' => 'sometimes',
        'tax_assessment' => 'required_if:enclosure.tax_assessment,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.tax_assessment' => 'sometimes',
        'expense_receipts' => 'required_if:enclosure.expense_receipts,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.expense_receipts' => 'sometimes',
        'partner_tax_assessment' => 'nullable|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.partner_tax_assessment' => 'sometimes',
        'supplementary_services' => 'nullable|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.supplementary_services' => 'sometimes',
        'ects_points' => 'nullable|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.ects_points' => 'sometimes',
        'parents_tax_factors' => 'required_if:enclosure.parents_tax_factors,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.parents_tax_factors' => 'sometimes',
    ];

    public function rules()
    {
        $certificate_of_study = is_null($this->enclosure->certificate_of_study);
        $tax_assessment = is_null($this->enclosure->tax_assessment);
        $partner_tax_assessment = is_null($this->enclosure->partner_tax_assessment);
        $supplementary_services = is_null($this->enclosure->supplementary_services);
        $ects_points = is_null($this->enclosure->ects_points);
        $parents_tax_factors = is_null($this->enclosure->parents_tax_factors);
        $expense_receipts = is_null($this->enclosure->expense_receipts);

        return [
            'enclosure.remark' => 'nullable',
            'certificate_of_study' => [new FileUploadRule($certificate_of_study)],
            'tax_assessment' => [new FileUploadRule($tax_assessment)],
            'partner_tax_assessment' => [new FileUploadRule($partner_tax_assessment)],
            'supplementary_services' => [new FileUploadRule($supplementary_services)],
            'ects_points' => [new FileUploadRule($ects_points)],
            'parents_tax_factors' => [new FileUploadRule($parents_tax_factors)],
            'expense_receipts' => [new FileUploadRule($expense_receipts)],
        ];
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function mount(): void
    {
        $lastname = auth()->user()->lastname;
        $firstname = auth()->user()->firstname;
        $this->UserName = $lastname.'_'.$firstname;
        $this->enclosure = Enclosure::where('application_id', session()->get('appl_id'))
            ->first() ?? new Enclosure;
        $this->isInitialAppl = Application::where('id', session()->get('appl_id'))->first(['is_first'])->is_first;

    }

    public function render()
    {
        return view('livewire.antrag.enclosure-form-stipendium-folge');
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function saveEnclosure(): void
    {
        $this->validate();

        $file_certificate_of_study = $this->upload($this->certificate_of_study, 'certificate_of_study');
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

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function upload($type, $text)
    {
        if (! is_null($type)) {
            $appl_id = session()->get('appl_id');
            $fileName = 'Appl'.$appl_id.'_'.$text.'.'.$type->getClientOriginalExtension();

            return $type->storeAs($this->UserName, $fileName, 'uploads');
        }
    }
}
