<?php

namespace Database\Factories;

use App\CategoryType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(CategoryType::cases())->value; // Random enum value
        $slug = Str::slug($type);
        return [
            'type' => $type,
            'slug' => $slug,
        ];
    }
}
