<?php

namespace Database\Seeders;

use App\CategoryType;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (CategoryType::cases() as $type) {
            Category::factory()->create([
                'type' => $type->value,
                'slug' => Str::slug($type->name),
                'color' => $type->color(),
            ]);
        }
    }
}
