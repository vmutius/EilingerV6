<?php

namespace App\Http\Livewire\Auth;

use App\Http\Traits\AddressUpdateTrait;
use App\Http\Traits\UserUpdateTrait;
use App\Models\User;
use App\Models\Address;
use App\Models\Country;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisterInst extends Component
{
    use UserUpdateTrait, AddressUpdateTrait;
    
    public $terms = false;

    protected $rules = [
        //User
        'username' => 'required|unique:users,username',
        'nameInst' =>'required|unique:users,nameInst',
        'telefon' => '',
        'mobile' => '',
        'telefonInst' => '',
        'email' => 'required|email|unique:users,email',
        'nameInst' => 'min:3',
        'emailInst' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'password_confirmation' => 'confirmed',
        'salutation' => 'required',
        'firstname' => 'required|min:2',
        'lastname' => 'required|min:2',

        //Address
        'street' => 'required|min:3',
        'number' => '',
        'plz' => 'required|min:4',
        'town' => 'required|min:3',
        'country' => 'required',

        //
        'terms' =>'required',
    ];

    protected $messages = [
        //User
        'username.unique' => 'Dieser Benutzername ist bereits vergeben',
        'nameInst.unique' => 'Ihre Organisation ist bereits registriert',
        'emailInst.unique' => 'Diese Email ihrer Organisation ist bereits registriert',

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
            'nameInst'=> $this->nameInst,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'salutation' => $this->salutation,
            'telefonInst' => $this->telefonInst,
            'emailInst' => $this->emailInst,
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
        
        event(new Registered($user));
        return redirect('/email/verify');
    }


    public function mount()
    {
        $this->model = User::class;
        request()->session()->forget('valid-username');
        request()->session()->forget('valid-nameInst');
        request()->session()->forget('valid-emailInst');
        
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
}