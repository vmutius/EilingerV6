<?php

namespace App\Http\Traits;

trait UserUpdateTrait
{
    public $username = '';
    public $salutation = '';
    public $name_inst = '';
    public $email_inst = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $user_id = '';
    public $phone_inst = '';
    public $website = '';
    public $firstname = '';
    public $lastname = '';
    public $phone = '';
    public $mobile = '';

    public function updatedUsername()
    {
        request()->session()->forget('valid-username');
        if ($this->validateOnly('username')) {
            session(['valid-username' => 'Username is available']);
        }
    }

    public function updatedSalutation()
    {
        request()->session()->forget('valid-salutation');
        if ($this->validateOnly('salutation')) {
            session(['valid-salutation' => 'OK']);
        }
    }

    public function updatedNameInst()
    {
        request()->session()->forget('valid-name_inst');
        if ($this->validateOnly('name_inst')) {
            session(['valid-name_inst' => 'OK']);
        }

    }

    public function updatedEmailInst()
    {
        request()->session()->forget('valid-email_inst');
        if ($this->validateOnly('email_inst')) {
            session(['valid-email_inst' => 'OK']);
        }
    }

    public function updatedTelefonInst()
    {
        request()->session()->forget('valid-phone_inst');
        if ($this->validateOnly('phone_inst')) {
            session(['valid-phone_inst' => 'OK']);
        }
    }

    public function updatedEmail()
    {
        request()->session()->forget('valid-email');
        if ($this->validateOnly('email')) {
            session(['valid-email' => 'OK']);
        }
    }

    public function updatedWebsite()
    {
        request()->session()->forget('valid-website');
        if ($this->validateOnly('website')) {
            session(['valid-website' => 'OK']);
        }
    }

    public function updatedFirstname()
    {
        request()->session()->forget('valid-firstname');
        if ($this->validateOnly('firstname')) {
            session(['valid-firstname' => 'OK']);
        }
    }

    public function updatedLastname()
    {
        request()->session()->forget('valid-lastname');
        if ($this->validateOnly('lastname')) {
            session(['valid-lastname' => 'OK']);
        }
    }

    public function updatedTelefon()
    {
        request()->session()->forget('valid-phone');
        if ($this->validateOnly('phone')) {
            session(['valid-phone' => 'OK']);
        }
    }

    public function updatedMobile()
    {
        request()->session()->forget('valid-mobile');
        if ($this->validateOnly('mobile')) {
            session(['valid-mobile' => 'OK']);
        }
    }

    public function updatedPassword()
    {
        request()->session()->forget('valid-password');
        if ($this->validateOnly('password')) {
            session(['valid-password' => 'OK']);
        }
    }

    public function updatedPasswordConfirmation()
    {
        request()->session()->forget('valid-password_confirmation');
        if ($this->validateOnly('password_confirmation')) {
            session(['valid-password_confirmation' => 'OK']);
        }
    }
}
