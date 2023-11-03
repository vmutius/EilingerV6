<?php

namespace App\Http\Livewire\Antrag;

use App\Enums\Bewilligung;
use App\Enums\CivilStatus;
use App\Models\Country;
use Illuminate\Validation\Rules\Enum;
use Livewire\Component;

class UserNatForm extends Component
{
    public $user;

    public $countries;

    public $partnerVisible = false;

    public function mount()
    {
        $this->user = auth()->user();
        $this->countries = Country::all();
    }

    public function render()
    {
        return view('livewire.antrag.user-nat-form');
    }

    public function saveUserNat()
    {
        $this->validate();
        $this->user->is_draft = false;
        $this->user->save();
        session()->flash('success', 'Benutzerdaten aktualisiert.');
    }

    public function updatedCivilStatus(): void
    {
        if ($this->user->civil_status == CivilStatus::verheiratet) {
            $this->partnerVisible = true;
        }
    }

    protected function rules(): array
    {
        return [
            'user.firstname' => 'required',
            'user.lastname' => 'required',
            'user.birthday' => 'required|date',
            'user.salutation' => 'required',
            'user.nationality' => 'required',
            'user.civil_status' => ['required', new Enum(CivilStatus::class)],
            'user.phone' => 'sometimes',
            'user.mobile' => 'sometimes',
            'user.in_ch_since' => 'sometimes',
            'user.granting' => ['nullable', 'required_with:user.in_ch_since', new Enum(Bewilligung::class)],
        ];
    }
}
