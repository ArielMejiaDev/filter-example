<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'description' => $this->faker->text,
            'user_id' => User::factory(),
        ];
    }
}
