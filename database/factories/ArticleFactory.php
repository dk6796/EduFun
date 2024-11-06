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
            'SubjectID' => fake()->unique()->numberBetween(1,6),
            'ArticleImage' => fake()->imageUrl(),
            'ArticleContent' => fake()->paragraph(),
            'WriterID' => fake()->numberBetween(1,3)
        ];
    }
}
