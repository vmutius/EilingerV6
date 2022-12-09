<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['nat', 'jur']),
            'salutation' => $this->faker->randomElement(['Herr', 'Frau']),
            'username' => $this->faker->unique()->userName,
            'lastname' => fake()->lastname(),
            'firstname' => fake()->firstname(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'telefon' => $this->faker->numerify('### #### #####'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
