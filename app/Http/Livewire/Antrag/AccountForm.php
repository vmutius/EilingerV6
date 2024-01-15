<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Account;
use Illuminate\Support\Facades\Lang;
use Livewire\Component;

class AccountForm extends Component
{
    public $account;

    protected $rules = [
        'account.name_bank' => 'required',
        'account.city_bank' => 'required',
        'account.owner' => 'required',
        'account.IBAN' => 'required|regex:/^([A-Z]{2}[ \-]?[0-9]{2})(?=(?:[ \-]?[A-Z0-9]){9,30}$)((?:[ \-]?[A-Z0-9]{3,5}){2,7})([ \-]?[A-Z0-9]{1,3})?$/',
    ];
    public function validationAttributes(): array
    {
        return Lang::get('account');
    }

    public function mount()
    {
        $this->account = Account::loggedInUser()
            ->where('application_id', session()->get('appl_id'))
            ->first() ?? new Account;
    }

    public function render()
    {
        return view('livewire.antrag.account-form');
    }

    public function saveAccount()
    {
        $this->validate();
        $this->account->is_draft = false;
        $this->account->user_id = auth()->user()->id;
        $this->account->application_id = session()->get('appl_id');
        $this->account->save();
        session()->flash('success', __('userNotification.accountSaved'));
    }
}
