<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug,
            'title' => $this->faker->title,
            'content' => $this->faker->text,
            'user_id' => User::factory(),
        ];
    }
}
