<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Track>
 */
class TrackFactory extends Factory
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
            "composer" => $this->faker->userName(),
            "podcast_id" => $this->faker->numberBetween('1','50'),
            "created_at" => $this->faker->time(),
            "updated_at" => $this->faker->time(),

        ];
}
}
