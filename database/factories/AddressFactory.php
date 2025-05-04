<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $departamentos = Department::all()->pluck('id')->toArray();
        return [
            'address' => $this->faker->address,
            'reference' => $this->faker->sentence,
            'department_id' => $this->faker->randomElement($departamentos),

        ];
    }
}
