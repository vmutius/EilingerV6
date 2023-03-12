<?php

namespace App\Http\Traits;

trait UserUpdateTrait
{
    public $username = '';
    public $name_inst = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $user_id = '';
    public $telefon_inst = '';
    public $email_inst = '';
    public $website = '';
    public $salutation = '';
    public $firstname = '';
    public $lastname = '';
    public $telefon = '';
    public $mobile = '';

    public function updatedUsername()
    {
        request()->session()->forget('valid-username');

        $validated = $this->validateOnly('username');

        //Valid username
        if (! empty($validated)) {
            session(['valid-username' => 'Username is available']);
        }
    }

    public function updatedname_inst()
    {
        request()->session()->forget('valid-name_inst');

        $validated = $this->validateOnly('name_inst');

        //Valid username
        if (! empty($validated)) {
            session(['valid-name_inst' => 'OK']);
        }
    }

    public function updatedemail_inst()
    {
        request()->session()->forget('valid-email_inst');

        $validated = $this->validateOnly('email_inst');

        //Valid username
        if (! empty($validated)) {
            session(['valid-email_inst' => 'OK']);
        }
    }
}
