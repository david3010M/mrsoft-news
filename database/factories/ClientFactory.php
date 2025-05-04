<?php

namespace Database\Factories;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    public function definition(): array
    {
        $image = 'clientes/placeholder.svg';
        $tipos = Type::all()->pluck('id')->toArray();
        return [
            'nombre' => $this->faker->company,
            'logo' => $image,
            'active' => true,
            'type_id' => $this->faker->randomElement($tipos),
            'imagen_referencia' => $image,
            'flyer_bienvenida' => $image,
            'flyer_informativo' => $image,
        ];
    }
}
