<?php

namespace App\Http\Livewire\Antrag;

use Livewire\Component;
use App\Models\Account;

class AccountForm extends Component
{
    public Account $account;

    protected $rules = [
        'account.name_bank' => 'nullable',
        'account.city_bank' => 'nullable',
        'account.owner' => 'nullable',
        'account.IBAN' => 'nullable',
    ];

    public function mount() 
    {
        $this->account = Account::where('user_id', auth()->user()->id)
            ->whereNull('application_id')
            ->first() ?? new Account;
    }

    public function render()
    {
        return view('livewire.antrag.account-form');
    }

    public function save()
    {
        $this->account->user_id = auth()->user()->id;
        $this->account->save();
        session()->flash('message', 'Auszahlungsdaten aktualisiert.');
    }
}