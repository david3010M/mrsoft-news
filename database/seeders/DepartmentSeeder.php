<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            ['name' => 'Amazonas'],
            ['name' => 'Áncash'],
            ['name' => 'Apurímac'],
            ['name' => 'Arequipa'],
            ['name' => 'Ayacucho'],
            ['name' => 'Cajamarca'],
            ['name' => 'Callao'],
            ['name' => 'Cusco'],
            ['name' => 'Huancavelica'],
            ['name' => 'Huánuco'],
            ['name' => 'Ica'],
            ['name' => 'Junín'],
            ['name' => 'La Libertad'],
            ['name' => 'Lambayeque'],
            ['name' => 'Lima'],
            ['name' => 'Loreto'],
            ['name' => 'Madre de Dios'],
            ['name' => 'Moquegua'],
            ['name' => 'Pasco'],
            ['name' => 'Piura'],
            ['name' => 'Puno'],
            ['name' => 'San Martín'],
            ['name' => 'Tacna'],
            ['name' => 'Tumbes'],
            ['name' => 'Ucayali'],
        ];

        foreach ($array as $item) {
            Department::create($item);
        }
    }
}
