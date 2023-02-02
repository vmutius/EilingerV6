<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $credentials = $this->validate();

        auth()->attempt($credentials)
            ? redirect()->intended('/')
            : $this->addError('email', trans('auth.failed'));

        if(auth()->user()->isAdmin){
            return redirect('/admin/dashboard');
        } else {
            return redirect('/user/dashboard');
        }
    }

    
    public function render()
    {
        return view('livewire.auth.login')
            ->layout(\App\View\Components\Layouts\Eilinger::class);
    }
}
