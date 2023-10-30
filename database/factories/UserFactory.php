<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
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
            'phone' => $this->faker->numerify('### #### #####'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
