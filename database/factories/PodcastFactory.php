<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Podcast>
 */
class PodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            "name" => $this->faker->name(),
            "topic" => $this->faker->title(),
            "created_at" => $this->faker->time(),
            "updated_at" => $this->faker->time(),

        ];
    }
}
