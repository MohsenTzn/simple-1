<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            "title" => $this->faker->title(),
            "demo" => $this->faker->name(),
            "category" => $this->faker->name(),
            "created_at" => $this->faker->time(),
            "updated_at" => $this->faker->time(),

        ];

    }
}
