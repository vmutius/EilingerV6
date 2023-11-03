<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Partner;
use Livewire\Component;

class PartnerForm extends Component
{
    public $partner;

    public function rules(): array
    {
        return [
            'lastname' => ['required'],
            'firstname' => ['required'],
            'birthday' => ['required', 'date'],
            'profession' => ['nullable'],
            'begin' => ['nullable', 'date'],
            'end' => ['nullable', 'date'],
            'is_draft' => ['required'],
        ];
    }

    public function mount()
    {
        $this->partner = Partner::loggedInUser()->first();
    }

    public function render()
    {
        return view('livewire.antrag.partner-form');
    }
}
