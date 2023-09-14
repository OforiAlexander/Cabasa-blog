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
        return [
            'title' => ucwords($this->faker->words(4,true)),
             'excerpt' => $this->faker->sentence,
             'description' => $this->faker->sentence(4, true),
             'hash_tag' => $this->faker->words(2,true),
             'body' => $this->faker->paragraph(3),
        ];
    }
}
