<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Address;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'country_id' => Country::inRandomOrder()->first()->id,
            'street' => $this->faker->word,
            'number' => $this->faker->randomNumber(2),
            'plz' =>$this->faker->randomNumber(4, true),
            'town'=> $this->faker->lexify,
        ];
    }
}
