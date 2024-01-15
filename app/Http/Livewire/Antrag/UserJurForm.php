<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Country;
use Illuminate\Support\Facades\Lang;
use Livewire\Component;

class UserJurForm extends Component
{
    public $user;

    public $countries;

    protected $rules = [
        'user.name_inst' => 'required',
        'user.phone_inst' => 'required',
        'user.email_inst' => 'required|email:strict',
        'user.website' => 'sometimes',
        'user.firstname' => 'required',
        'user.lastname' => 'required',
        'user.salutation' => 'required',
        'user.phone' => 'nullable',
        'user.mobile' => 'nullable',
        'user.contact_aboard' => 'sometimes',
    ];

    public function validationAttributes(): array
    {
        return Lang::get('user');
    }

    public function mount()
    {
        $this->user = auth()->user();
        $this->countries = Country::all();
    }

    public function render()
    {
        return view('livewire.antrag.user-jur-form');
    }

    public function saveUserJur()
    {
        $this->validate();
        $this->user->is_draft = false;
        $this->user->save();
        session()->flash('success', __('userNotification.userSaved'));
    }
}
