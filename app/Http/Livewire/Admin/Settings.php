<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Settings extends Component
{
    public $showModal = false;
    public $salutation;
    public $username;
    public $lastname;
    public $firstname;
    public $telefon;
    public $email;
    public $password;

    protected $rules = [
            'username' =>  'required|unique:users,username',
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email|unique:users,email',
            'telefon' => 'required',
            'password' => 'required',
    ];

    public function render()
    {
        $users=User::where('is_admin', true)->get();
        return view('livewire.admin.settings',[
            'users' => $users
        ])
            ->layout(\App\View\Components\Layouts\AdminDashboard::class);
    }

    public function addAdmin() 
    {
        $this->showModal = true; 
    }

    public function save()
    {
        $this->validate();

        $user= User::create([
            'type'=>'nat',
            'salutation'=>$this->salutation,
            'telefon'=>$this->telefon,
            'username'=>$this->username,
            'lastname'=>$this->lastname,
            'firstname'=>$this->firstname,
            'email'=>$this->email,
            'email_verified_at'=>now(),
            'password' => Hash::make($this->password),
            
        ]);
        $user->is_admin = 1;
        $user->save();
        $this->reset(['salutation','username', 'email', 'lastname', 'firstname', 'telefon', 'password']);
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }
}
