<?php
namespace App\Http\Traits;
use App\Models\Address;

trait AddressUpdateTrait {

    public $street = '';
    public $number = '';
    public $plz = '';
    public $town = '';
    public $country_id = '';

    public function updatedStreet()
    {
        request()->session()->forget('valid-street');
        $validated = $this->validateOnly('street');
        if(!empty($validated)){
            session(['valid-street' => 'OK']);
        }
    }

    public function updatedPlz()
    {
        request()->session()->forget('valid-plz');
        $validated = $this->validateOnly('plz');
        if(!empty($validated)){
            session(['valid-plz' => 'OK']);
        }
    }

    public function updatedTown()
    {
        request()->session()->forget('valid-town');
        $validated = $this->validateOnly('town');
        if(!empty($validated)){
            session(['valid-town' => 'OK']);
        }
    }

}
