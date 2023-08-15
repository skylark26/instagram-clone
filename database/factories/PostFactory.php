<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = \App\Models\User::factory()->create();
        return [
            'caption' => fake()->paragraph(),
            'slug' => fake()->slug(),
            'image' => fake()->image(storage_path('app/posts'), 500, 500, null, false),
            'user_id' => $user->id
        ];
    }
}
