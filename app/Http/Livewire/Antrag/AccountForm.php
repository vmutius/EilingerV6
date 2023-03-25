<?php

namespace App\Http\Livewire\Antrag;

use App\Models\Account;
use Livewire\Component;

class AccountForm extends Component
{
    public $account;

    protected $rules = [
        'account.name_bank' => 'required',
        'account.city_bank' => 'required',
        'account.owner' => 'required',
        'account.IBAN' => 'required',
    ];

    public function mount()
    {
        $this->account = Account::where('user_id', auth()->user()->id)
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
        session()->flash('success', 'Auszahlungsdaten aktualisiert.');
    }
}
