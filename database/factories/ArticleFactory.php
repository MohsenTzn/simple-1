<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "news_id" => $this->faker->numberBetween('1','50'),
            "name" => $this->faker->name(),
            "subject" => $this->faker->name(),
            "author" => $this->faker->lastName(),
        ];
    }
}
