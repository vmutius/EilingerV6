<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Enclosure;
use Livewire\WithFileUploads;

class EnclosureInitialForm extends Component
{
    use WithFileUploads;
    public $enclosure;
    public $filePath;
    public $UserName;
    public $passport;
    public $cv;
    public $apprenticeship_contract;
    public $diploma;
    public $divorce;
    public $rental_contract;

    protected $rules = [
        'passport' => 'required_if:enclosure.passport,null',
        'enclosure.passport' => 'required|mimes:png,jpg,jpeg,pdf|max:2048', 
        'cv' => 'required_if:enclosure.cv,null',
        'enclosure.cv' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
        'apprenticeship_contract' => 'required_if:enclosure.apprenticeship_contract,null',
        'enclosure.apprenticeship_contract' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
        'diploma' => 'required_if:enclosure.diploma,null',
        'enclosure.diploma' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
        'divorce' => 'nullable',
        'enclosure.divorce' => 'nullable|mimes:png,jpg,jpeg,pdf|max:2048',
        'rental_contract' => 'nullable',
        'enclosure.rental_contract' => 'nullable|mimes:png,jpg,jpeg,pdf|max:2048',
    ];

    public function messages()
    {
        return [
            'passport' => 'Ausweis muss hochgeladen werden',
            'cv' => 'Lebenslauf muss hochgeladen werden',
            'apprenticeship_contract'  => 'Ausbildungs- oder Lehrvertrag muss hochgeladen werden',
            'diploma' => 'Ausweis über einen Berufsabschluss muss hochgeladen werden',
        ];
    }

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
        return view('livewire.antrag.enclosure-initial-form');
    }

    public function saveEnclosure()
    {
        //$this->validate(); 
        
        $file_passport = $this->upload($this->passport,'passport');
        $this->enclosure->passport = $file_passport;
        $file_cv = $this->upload($this->cv, 'cv');
        $this->enclosure->cv = $file_cv;
        $file_apprenticeship_contract = $this->upload($this->apprenticeship_contract,'apprenticeship_contract');
        $this->enclosure->apprenticeship_contract = $file_apprenticeship_contract;
        $file_diploma = $this->upload($this->diploma,'diploma');
        $this->enclosure->diploma = $file_diploma;
        $file_divorce = $this->upload($this->divorce,'divorce');
        $this->enclosure->divorce = $file_divorce;
        $file_rental_contract = $this->upload($this->rental_contract,'rental_contract');
        $this->enclosure->rental_contract = $file_rental_contract;
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
