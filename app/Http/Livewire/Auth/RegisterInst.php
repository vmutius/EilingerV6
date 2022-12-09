<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Models\Country;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class RegisterInst extends Component
{
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    protected $rules = [
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|same:passwordConfirmation',
    ];

    public function updatedEmail()
    {
        $this->validate(['email' => 'unique:users']);
    }

    public function register()
    {
        $this->validate();

        $user = User::create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        auth()->login($user);

        return redirect('/');
    }

    public function render()
    {
        $countries = Country::all();
        return view('livewire.auth.register_inst', compact('countries'))
            ->extends('components.layouts.eilinger')
            ->section('content');
    }
}