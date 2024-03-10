<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Enclosure;
use App\Rules\FileUploadRule;
use Illuminate\Support\Facades\Lang;
use Livewire\Component;
use Livewire\WithFileUploads;

class EnclosureFormDarlehenPrivat extends Component
{
    use WithFileUploads;

    public $enclosure;

    public $UserName;

    public $activity;

    public $activity_report;

    public $balance_sheet;

    public $cost_receipts;

    public $open_invoice;

    public $rental_contract;

    public $tax_assessment;

    protected $rules = [
        'enclosure.remark' => 'nullable',
        'activity' => 'required_if:enclosure.activity,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.activity' => 'sometimes',
        'activity_report' => 'required_if:enclosure.activity_report,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.activity_report' => 'sometimes',
        'rental_contract' => 'required_if:enclosure.rental_contract,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.rental_contract' => 'sometimes',
        'balance_sheet' => 'required_if:enclosure.balance_sheet,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.balance_sheet' => 'sometimes',
        'tax_assessment' => 'required_if:enclosure.tax_assessment,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.tax_assessment' => 'sometimes',
        'cost_receipts' => 'required_if:enclosure.cost_receipts,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.cost_receipts' => 'sometimes',
        'open_invoice' => 'required_if:enclosure.open_invoice,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.open_invoice' => 'sometimes',

    ];

    public function validationAttributes(): array
    {
        return Lang::get('education');
    }

    public function rules()
    {

        $activity = is_null($this->enclosure->activity) && $this->enclosure->activitySendLater==0;
        $activity_report = is_null($this->enclosure->activity_report) && $this->enclosure->activityReportSendLater==0;
        $rental_contract = is_null($this->enclosure->rental_contract) && $this->enclosure->rentalContractSendLater==0;
        $balance_sheet = is_null($this->enclosure->balance_sheet) && $this->enclosure->balanceSheetSendLater==0;
        $tax_assessment = is_null($this->enclosure->tax_assessment) && $this->enclosure->taxAssessmentSendLater==0;
        $cost_receipts = is_null($this->enclosure->cost_receipts) && $this->enclosure->costReceiptsSendLater==0;

        return [
            'enclosure.remark' => 'nullable',
            'activity' => [new FileUploadRule($activity)],
            'activity_report' => [new FileUploadRule($activity_report)],
            'rental_contract' => [new FileUploadRule($rental_contract)],
            'balance_sheet' => [new FileUploadRule($balance_sheet)],
            'tax_assessment' => [new FileUploadRule($tax_assessment)],
            'cost_receipts' => [new FileUploadRule($cost_receipts)],
            'open_invoice' => [new FileUploadRule(false)],
            'enclosure.activitySendLater' => 'nullable',
            'enclosure.activityReportSendLater' => 'nullable',
            'enclosure.rentalContractSendLater' => 'nullable',
            'enclosure.balanceSheetSendLater' => 'nullable',
            'enclosure.taxAssessmentSendLater' => 'nullable',
            'enclosure.costReceiptsSendLater' => 'nullable',
            'enclosure.openInvoiceSendLater' => 'nullable',
        ];
    }

    public function mount()
    {
        $lastname = auth()->user()->lastname;
        $firstname = auth()->user()->firstname;
        $this->UserName = $lastname.'_'.$firstname;
        $this->enclosure = Enclosure::where('application_id', session()->get('appl_id'))
            ->first() ?? new Enclosure;
    }

    public function render()
    {
        return view('livewire.antrag.enclosure-form-darlehen_privat');
    }

    public function saveEnclosureDarlehen()
    {
        $this->validate();
        if ($this->activity) {
            $file_activity = $this->upload($this->activity, 'activity');
            $this->enclosure->activity = $file_activity;
            $this->enclosure->activitySendLater = false;
        }

        if ($this->activity_report) {
            $file_activity_report = $this->upload($this->activity_report, 'activity_report');
            $this->enclosure->activity_report = $file_activity_report;
            $this->enclosure->activityReportSendLater = false;
        }

        if ($this->balance_sheet) {
            $file_balance_sheet = $this->upload($this->balance_sheet, 'balance_sheet');
            $this->enclosure->balance_sheet = $file_balance_sheet;
            $this->enclosure->balanceSheetSendLater = false;
        }

        if ($this->cost_receipts) {
            $file_cost_receipts = $this->upload($this->cost_receipts, 'cost_receipts');
            $this->enclosure->cost_receipts = $file_cost_receipts;
            $this->enclosure->costReceiptsSendLater = false;
        }

        if ($this->open_invoice) {
            $file_open_invoice = $this->upload($this->open_invoice, 'open_invoice');
            $this->enclosure->open_invoice = $file_open_invoice;
            $this->enclosure->openInvoiceSendLater = false;
        }

        if ($this->rental_contract) {
            $file_rental_contract = $this->upload($this->rental_contract, 'rental_contract');
            $this->enclosure->rental_contract = $file_rental_contract;
            $this->enclosure->rentalContractSendLater = false;
        }

        if ($this->tax_assessment) {
            $file_tax_assessment = $this->upload($this->tax_assessment, 'tax_assessment');
            $this->enclosure->tax_assessment = $file_tax_assessment;
            $this->enclosure->taxAssessmentSendLater = false;
        }

        $this->enclosure->is_draft = false;
        $this->enclosure->application_id = session()->get('appl_id');
        $this->enclosure->save();
        session()->flash('success', __('userNotification.enclosureSaved'));
    }

    public function upload($type, $text)
    {
        if (! is_null($type)) {
            $appl_id = session()->get('appl_id');
            $fileName = 'Appl'.$appl_id.'_'.$text.'.'.$type->getClientOriginalExtension();

            return $type->storeAs($this->UserName, $fileName, 's3');
        }
    }
}
