<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Models\Address;
use App\Models\Country;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class RegisterInst extends Component
{
    public $username ='';
    public $name_inst = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $user_id = '';
    public $street = '';
    public $number = '';
    public $plz = '';
    public $town = '';
    public $country = '';
    public $telefon_inst = '';
    public $email_inst = '';
    public $website = '';
    public $salutation = '';
    public $firstname = '';
    public $lastname = '';
    public $telefon = '';
    public $mobile = '';

    protected $rules = [
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|same:password_confirmation',
    ];

    public function updatedEmail()
    {
        $this->validate(['email' => 'unique:users']);
    }

    public function register()
    {
        $this->validate();

        $user = User::create([
            'username' => $this->username,
            'type' => 'jur',
            'name_inst'=> $this->name_inst,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'salutation' => $this->salutation,
            'telefon_inst' => $this->telefon_inst,
            'email_inst' => $this->email_inst,
            'website' => $this->website,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'telefon' => $this->telefon,
            'mobile' => $this->mobile,
        ]);

        $address = Address::create([
            'user_id' => $user->id,
            'street' => $this->street,
            'number' => $this->number,
            'plz' => $this->plz,
            'town' => $this->town,
        ]);

        return redirect('/');
    }

    public function render()
    {
        $countries = Country::all();
        return view('livewire.auth.register_inst', compact('countries'))
            ->layout(\App\View\Components\Layouts\Eilinger::class);
            
    }
}