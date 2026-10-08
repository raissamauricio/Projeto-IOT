<?php

namespace Database\Seeders;

use App\Models\Sensor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sensor::create([
            'ambiente' => 'sala',
            'descricao' => 'sala de aula',
            'status' => 'ativo',
            'tipo' => '',
            'codigo' => '0101'
        ]);

        Sensor::create([
            'ambiente' => 'sala 15',
            'descricao' => 'sala de aula',
            'status' => 'ativo',
            'tipo' => '',
            'codigo' => '1010'
        ]);

        Sensor::create([
            'ambiente' => 'cozinha',
            'descricao' => 'cozinhar',
            'status' => 'ativo',
            'tipo' => '',
            'codigo' => '5555'
        ]);
    }
}
