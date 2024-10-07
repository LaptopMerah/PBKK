<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
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
    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'title' => $title,
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => Str::slug($title),
            'image' => 'https://picsum.photos/400/300?random=2',
            'content' => fake()->text(300),
        ];
    }
}
