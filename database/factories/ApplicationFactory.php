<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\Currency;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    protected $model = Application::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'appl_status' => $this->faker->word(),
            'bereich' => $this->faker->word(),
            'form' => $this->faker->word(),
            'comment' => $this->faker->word(),
            'reason' => $this->faker->word(),
            'payout_plan' => $this->faker->word(),
            'is_first' => $this->faker->boolean(),

            'user_id' => User::factory(),
            'currency_id' => Currency::factory(),
        ];
    }
}
