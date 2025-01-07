<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
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
        $title = fake()->sentence(); // Generate the title first
        return [
            'title' => $title,
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => Str::slug($title), // Use the same title for slug
            'body' => fake()->text(1000),
        ];
    }
}
