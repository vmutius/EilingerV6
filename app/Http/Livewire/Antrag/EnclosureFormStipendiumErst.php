<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Application;
use App\Models\Enclosure;
use App\Rules\FileUploadRule;
use Illuminate\Support\Facades\Lang;
use Livewire\Component;
use Livewire\WithFileUploads;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class EnclosureFormStipendiumErst extends Component
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

    public function rules()
    {
        $passport = is_null($this->enclosure->passport) && $this->enclosure->passportSendLater==0;
        $diploma = is_null($this->enclosure->diploma) && $this->enclosure->diplomaSendLater==0;
        $apprenticeship_contract = is_null($this->enclosure->apprenticeship_contract) && $this->enclosure->apprenticeshipContractSendLater==0;
        $certificate_of_study = is_null($this->enclosure->certificate_of_study) && $this->enclosure->certificateOfStudySendLater==0;
        $tax_assessment = is_null($this->enclosure->tax_assessment) && $this->enclosure->taxAssessmentSendLater==0;
        $cv = is_null($this->enclosure->cv) && $this->enclosure->cvSendLater==0;
        $parents_tax_factors = is_null($this->enclosure->parents_tax_factors) && $this->enclosure->parentsTaxFactorsSendLater==0;
        $expense_receipts = is_null($this->enclosure->expense_receipts) && $this->enclosure->expenseReceiptsSendLater==0;

        return [
            'enclosure.remark' => 'nullable',
            'passport' => [new FileUploadRule($passport)],
            'cv' => [new FileUploadRule($cv)],
            'apprenticeship_contract' => [new FileUploadRule($apprenticeship_contract)],
            'diploma' => [new FileUploadRule($diploma)],
            'divorce' => [new FileUploadRule()],
            'rental_contract' => [new FileUploadRule()],
            'certificate_of_study' => [new FileUploadRule($certificate_of_study)],
            'tax_assessment' => [new FileUploadRule($tax_assessment)],
            'partner_tax_assessment' => [new FileUploadRule()],
            'supplementary_services' => [new FileUploadRule()],
            'ects_points' => [new FileUploadRule()],
            'parents_tax_factors' => [new FileUploadRule($parents_tax_factors)],
            'expense_receipts' => [new FileUploadRule($expense_receipts)],
            'enclosure.certificateOfStudySendLater' => 'nullable',
            'enclosure.taxAssessmentSendLater' => 'nullable',
            'enclosure.expenseReceiptsSendLater' => 'nullable',
            'enclosure.partnerTaxAssessmentSendLater' => 'nullable',
            'enclosure.supplementaryServicesSendLater' => 'nullable',
            'enclosure.ectsPointsSendLater' => 'nullable',
            'enclosure.parentsTaxFactorsSendLater' => 'nullable',
            'enclosure.passportSendLater' => 'nullable',
            'enclosure.cvSendLater' => 'nullable',
            'enclosure.apprenticeshipContractSendLater' => 'nullable',
            'enclosure.diplomaSendLater' => 'nullable',
            'enclosure.divorceSendLater' => 'nullable',
            'enclosure.rentalContractSendLater' => 'nullable',
        ];
    }

    public function validationAttributes(): array
    {
        return Lang::get('education');
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
        return view('livewire.antrag.enclosure-form-stipendium-erst');
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function saveEnclosure(): void
    {
        $this->validate();

        if($this->passport) {
            $file_passport = $this->upload($this->passport, 'passport');
            $this->enclosure->passport = $file_passport;
            $this->enclosure->passportSendLater = false;
        }
        if($this->cv) {
            $file_cv = $this->upload($this->cv, 'cv');
            $this->enclosure->cv = $file_cv;
        }
        if($this->apprenticeship_contract) {
            $file_apprenticeship_contract = $this->upload($this->apprenticeship_contract, 'apprenticeship_contract');
            $this->enclosure->apprenticeship_contract = $file_apprenticeship_contract;
            $this->enclosure->apprenticeshipContractSendLater = false;
        }

        if($this->diploma) {
            $file_diploma = $this->upload($this->diploma, 'diploma');
            $this->enclosure->diploma = $file_diploma;
            $this->enclosure->diplomaSendLater = false;
        }

        if($this->divorce) {
            $file_divorce = $this->upload($this->divorce, 'divorce');
            $this->enclosure->divorce = $file_divorce;
            $this->enclosure->divorceSendLater = false;
        }

        if($this->rental_contract) {
            $file_rental_contract = $this->upload($this->rental_contract, 'rental_contract');
            $this->enclosure->rental_contract = $file_rental_contract;
            $this->enclosure->rentalContractSendLater = false;
        }

        if($this->certificate_of_study) {
            $file_certificate_of_study = $this->upload($this->certificate_of_study, 'certificate_of_study');
            $this->enclosure->certificate_of_study = $file_certificate_of_study;
            $this->enclosure->certificateOfStudySendLater = false;
        }

        if($this->tax_assessment) {
            $file_tax_assessment = $this->upload($this->tax_assessment, 'tax_assessment');
            $this->enclosure->tax_assessment = $file_tax_assessment;
            $this->enclosure->taxAssessmentSendLater = false;
        }

        if($this->expense_receipts) {
            $file_expense_receipts = $this->upload($this->expense_receipts, 'expense_receipts');
            $this->enclosure->expense_receipts = $file_expense_receipts;
            $this->enclosure->expenseReceiptsSendLater = false;
        }

        if($this->partner_tax_assessment) {
            $file_partner_tax_assessment = $this->upload($this->partner_tax_assessment, 'partner_tax_assessment');
            $this->enclosure->partner_tax_assessment = $file_partner_tax_assessment;
            $this->enclosure->partnerTaxAssessmentSendLater = false;
        }

        if($this->supplementary_services) {
            $file_supplementary_services = $this->upload($this->supplementary_services, 'supplementary_services');
            $this->enclosure->supplementary_services = $file_supplementary_services;
            $this->enclosure->supplementaryServicesSendLater = false;
        }

        if($this->ects_points) {
            $file_ects_points = $this->upload($this->ects_points, 'ects_points');
            $this->enclosure->ects_points = $file_ects_points;
            $this->enclosure->ectsPointsSendLater = false;
        }

        if($this->parents_tax_factors) {
            $file_parents_tax_factors = $this->upload($this->parents_tax_factors, 'parents_tax_factors');
            $this->enclosure->parents_tax_factors = $file_parents_tax_factors;
            $this->enclosure->parentsTaxFactorsSendLater = false;
        }

        $this->enclosure->is_draft = false;
        $this->enclosure->application_id = session()->get('appl_id');
        $this->enclosure->save();
        session()->flash('success', __('userNotification.enclosureSaved'));
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

            return $type->storeAs($this->UserName, $fileName, 's3');
        }
    }
}
