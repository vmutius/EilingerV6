<?php

namespace App\Http\Traits;

trait AddressUpdateTrait
{
    public $street = '';
    public $number = '';
    public $plz = '';
    public $town = '';
    public $country_id = '';

    public function updatedStreet()
    {
        request()->session()->forget('valid-street');
        if ($this->validateOnly('street')) {
            session(['valid-street' => 'OK']);
        }
    }

    public function updatedPlz()
    {
        request()->session()->forget('valid-plz');
        if ($this->validateOnly('plz')) {
            session(['valid-plz' => 'OK']);
        }
    }

    public function updatedTown()
    {
        request()->session()->forget('valid-town');
        if ($this->validateOnly('town')) {
            session(['valid-town' => 'OK']);
        }
    }

    public function updatedNumber()
    {
        request()->session()->forget('valid-number');
        if ($this->validateOnly('number')) {
            session(['valid-number' => 'OK']);
        }
    }

    public function updatedCountryId()
    {
        request()->session()->forget('valid-country_id');
        if ($this->validateOnly('country_id')) {
            session(['valid-country_id' => 'OK']);
        }
    }
}
