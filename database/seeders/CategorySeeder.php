<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Noticias', 'description' => 'noticias'],
            ['name' => 'Eventos', 'description' => 'eventos'],
            ['name' => 'Productos', 'description' => 'productos'],
            ['name' => 'Promociones', 'description' => 'promociones'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
