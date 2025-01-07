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
        ]);
        Category::create([
            'name' => 'Tech Gadgets',
            'slug' => 'technology',
        ]);
        Category::create([
            'name' => 'Animation',
            'slug' => 'animation',
        ]);
        Category::create([
            'name' => 'Business Marketing',
            'slug' => 'business-marketing',
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
    }
}
