<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Application;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AccountFactory extends Factory
{
    protected $model = Account::class;

    public function definition(): array
    {
        return [
            'name_bank' => $this->faker->name(),
            'city_bank' => $this->faker->word(),
            'owner' => $this->faker->word(),
            'IBAN' => $this->faker->iban(),
            'is_draft' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'user_id' => User::factory(),
            'application_id' => Application::factory(),
        ];
    }
}
