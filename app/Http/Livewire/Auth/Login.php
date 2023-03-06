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

        if (auth()->attempt($credentials))
        {
            if(auth()->user()->is_admin){
                return redirect('/admin/dashboard')
                ->with('success', 'Sie sind eingeloggt');
            } else {
                return redirect('/user/dashboard')
                ->with('success', 'Sie sind eingeloggt');
            }
        } else {
            return redirect ('login')
            ->with('danger', 'Email oder Passwort stimmen nicht'); 
        }
        
    }

    
    public function render()
    {
        return view('livewire.auth.login')
            ->layout(\App\View\Components\Layouts\Eilinger::class);
    }
}
