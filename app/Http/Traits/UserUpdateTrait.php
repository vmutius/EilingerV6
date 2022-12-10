<?php
namespace App\Http\Traits;
use App\Models\User;

trait UserUpdateTrait {

    public $username ='';
    public $nameInst = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $user_id = '';
    public $telefonInst = '';
    public $emailInst = '';
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
        if(!empty($validated)){
            session(['valid-username' => 'Username is available']);
        }
    }

    public function updatedNameInst()
    {
        request()->session()->forget('valid-nameInst');

        $validated = $this->validateOnly('nameInst');

        //Valid username
        if(!empty($validated)){
            session(['valid-nameInst' => 'OK']);
        }
    }

    public function updatedEmailInst()
    {
        request()->session()->forget('valid-emailInst');

        $validated = $this->validateOnly('emailInst');

        //Valid username
        if(!empty($validated)){
            session(['valid-emailInst' => 'OK']);
        }
    }

}