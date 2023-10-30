<?php

namespace Database\Factories;

use App\Enums\ApplStatus;
use App\Enums\Bereich;
use App\Enums\Form;
use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    protected $model = Application::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'appl_status' => $this->faker->randomElement(ApplStatus::class),
            'bereich' => $this->faker->randomElement(Bereich::class),
            'form' => $this->faker->randomElement(Form::class),
            'comment' => $this->faker->word(),
            'reason' => $this->faker->word(),
            'payout_plan' => $this->faker->word(),
            'is_first' => $this->faker->boolean(),

            'user_id' => $this->faker->randomNumber(1, 30),
            'currency_id' => $this->faker->randomNumber(1, 115),

        ];
    }
}
