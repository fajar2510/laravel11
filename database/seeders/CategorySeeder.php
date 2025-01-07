<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create();
        Category::create([
            'name' => 'UI UX Design',
            'slug' => 'ui-ux-design',
            'color' => 'red',
        ]);
        Category::create([
            'name' => 'Tech Gadgets',
            'slug' => 'technology',
            'color' => 'blue',
        ]);
        Category::create([
            'name' => 'Animation',
            'slug' => 'animation',
            'color' => 'green',
        ]);
        Category::create([
            'name' => 'Business Marketing',
            'slug' => 'business-marketing',
            'color' => 'yellow',
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
            'color' => 'purple',
        ]);
    }
}
