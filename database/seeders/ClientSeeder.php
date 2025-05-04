<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Client;
use App\Models\Department;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = Type::all()->pluck('id')->toArray();
        foreach ($tipos as $tipo) {
            for ($i = 0; $i < 5; $i++) {
                $client = Client::factory()->create([
                    'type_id' => $tipo,
                ]);
                for ($j = 0; $j < 3; $j++) {
                    Address::factory()->create([
                        'client_id' => $client->id,
                    ]);
                }
            }
        }

    }
}
