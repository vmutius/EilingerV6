<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Account;

class AccountForm extends Component
{
    public $account;

    protected $rules = [
        'account.name_bank' => 'nullable',
        'account.city_bank' => 'nullable',
        'account.owner' => 'nullable',
        'account.IBAN' => 'nullable',
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
        $this->account->user_id = auth()->user()->id;
        $this->account->application_id = session()->get('appl_id');
        $this->account->save();
        session()->flash('message', 'Auszahlungsdaten aktualisiert.');
    }

}
