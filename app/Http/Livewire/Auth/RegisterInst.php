<?php

namespace App\Http\Livewire\Auth;

use App\Http\Traits\AddressUpdateTrait;
use App\Http\Traits\UserUpdateTrait;
use App\Models\User;
use App\Models\Address;
use App\Models\Country;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;

class RegisterInst extends Component
{
    use UserUpdateTrait, AddressUpdateTrait;
    
    public $terms = false;

    public function rules() {
        return [
            'username' => 'required|unique:users,username',
            'name_inst' =>'required|unique:users,name_inst',
            'telefon' => 'nullable',
            'telefon_inst' => 'nullable',
            'mobile' => 'nullable',
            'salutation' => 'required',
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'email_inst' => 'required|email|unique:users,email_inst',
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ],
            'password_confirmation' => 'required|same:password',
            'street' => 'required|min:3',
            'number' => 'nullable',
            'plz' => 'required|min:4',
            'town' => 'required|min:3',
            'country_id' => 'required',
            'terms' =>'accepted',
        ];
    }

    protected $messages = [
        //User
        'username.unique' => 'Dieser Benutzername ist bereits vergeben',
        'name_inst.unique' => 'Ihre Organisation ist bereits registriert',
        'email_inst.unique' => 'Diese Email ihrer Organisation ist bereits registriert',
        'password.regexp' => 'Das Passwort muss mindestens 8 Zeichen lang sein und muss mindestens 1 Grossbuchstaben, 
                    einen Kleinbuchstaben, eine Zahl und ein Sonderzeichen enthalten',

        //Address
        'plz' => 'Postleitzahl ist eine vierstellige Zahl',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function registerInst()
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
            'country_id' => $this->country_id,
        ]);
        
        event(new Registered($user));
        Auth::login($user);
        return redirect('verify-email');
    }


    public function mount()
    {
        $this->model = User::class;
        request()->session()->forget('valid-username');
        request()->session()->forget('valid-name_inst');
        request()->session()->forget('valid-email_inst');
        
        $this->model = Address::class;
        request()->session()->forget('valid-street');
        request()->session()->forget('valid-number');
        request()->session()->forget('valid-plz');
        request()->session()->forget('valid-town');
    }

    public function render()
    {
        $countries = Country::all();
        return view('livewire.auth.register_inst', compact('countries'))
            ->layout(\App\View\Components\Layouts\Eilinger::class);
            
    }

    public function sendNewUserData()
    {
        $newUserData = [
            'subject' => 'Neuer Benutzer'. $this->username,
            'body' => 'Der neue Benutzer mit '.$this->username.' und '.$this->email.' hat sich registriert.'  
        ];

    }
}