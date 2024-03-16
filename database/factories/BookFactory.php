<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(mt_rand(2,8)),
            'writer' => fake()->name(),
            'publisher' => fake()->company(),
            'publication' => fake()->date(),
            'stock' => mt_rand(1,5),
            'category_id' => mt_rand(1,5)
        ];
    }
}
