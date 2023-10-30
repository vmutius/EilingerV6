<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Enclosure;
use Livewire\WithFileUploads;

class EnclosureFormDarlehen extends Component
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
        'enclosure.activity' =>  'sometimes',
        'activity_report' => 'required_if:enclosure.activity_report,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.activity_report' =>  'sometimes',
        'rental_contract' => 'required_if:enclosure.rental_contract,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.rental_contract' =>  'sometimes',
        'balance_sheet' => 'required_if:enclosure.balance_sheet,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.balance_sheet' =>  'sometimes',
        'tax_assessment' => 'required_if:enclosure.tax_assessment,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.tax_assessment' =>  'sometimes',
        'cost_receipts' => 'required_if:enclosure.cost_receipts,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.cost_receipts' =>  'sometimes',
        'open_invoice' => 'required_if:enclosure.open_invoice,null|mimes:png,jpg,jpeg,pdf|max:2048',
        'enclosure.open_invoice' =>  'sometimes',

    ];

    public function mount()
    {
        $lastname = auth()->user()->lastname;
        $firstname = auth()->user()->firstname;
        $this->UserName = $lastname . '_' . $firstname;
        $this->enclosure = Enclosure::where('application_id', session()->get('appl_id'))
            ->first() ?? new Enclosure;
    }

    public function render()
    {
        return view('livewire.antrag.enclosure-form-darlehen');
    }

    public function saveEnclosureDarlehen()
    {
        $this->validate();
        $file_activity = $this->upload($this->activity,'activity');
        $this->enclosure->activity = $file_activity;
        $file_activity_report = $this->upload($this->activity_report,'activity_report');
        $this->enclosure->activity_report = $file_activity_report;
        $file_balance_sheet = $this->upload($this->balance_sheet,'balance_sheet');
        $this->enclosure->balance_sheet = $file_balance_sheet;
        $file_cost_receipts = $this->upload($this->cost_receipts,'cost_receipts');
        $this->enclosure->cost_receipts = $file_cost_receipts;
        $file_open_invoice = $this->upload($this->open_invoice,'open_invoice');
        $this->enclosure->open_invoice = $file_open_invoice;
        $file_rental_contract = $this->upload($this->rental_contract,'rental_contract');
        $this->enclosure->rental_contract = $file_rental_contract;
        $file_tax_assessment = $this->upload($this->tax_assessment,'tax_assessment');
        $this->enclosure->tax_assessment = $file_tax_assessment;

        $this->enclosure->is_draft = false;
        $this->enclosure->application_id = session()->get('appl_id');
        $this->enclosure->save();
        session()->flash('success', 'Beilagen aktualisiert.');
    }

    public function upload($type,$text) {
        if(!is_null($type)) {
            $appl_id = session()->get('appl_id');
            $fileName = "Appl" . $appl_id . '_' . $text . '.' . $type->getClientOriginalExtension();
            $file = $type->storeAs($this->UserName, $fileName, 'uploads');
            return $file;
        }
    }
}
