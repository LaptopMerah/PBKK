<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\CategoryType;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();
        $categories = collect(CategoryType::cases())->map(function ($type) {
            return Category::factory()->create([
                'type' => $type->value,
                'slug' => Str::slug($type->name),
            ]);
        });
        News::factory(100)
            ->recycle($users)  // Recycle the users
            ->recycle($categories)  // Recycle the categories
            ->create();
    }
}
