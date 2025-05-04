<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type>
 */
class TypeFactory extends Factory
{
    public function definition(): array
    {
        $products = Product::all()->pluck('id')->toArray();
        return [
            'name' => $this->faker->word(),
            'active' => true,
            'product_id' => $this->faker->randomElement($products),
        ];
    }
}
