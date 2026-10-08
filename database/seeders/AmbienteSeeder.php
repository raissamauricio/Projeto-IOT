<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ambiente::create([
            'nome' => 'sala',
            'descricao' => 'sala',
            'status' => 'ativo'
        ]);

        Ambiente::create([
            'nome' => 'sala 15',
            'descricao' => 'sala de aula',
            'status' => 'ativo'
        ]);

        Ambiente::create([
            'nome' => 'cozinha',
            'descricao' => 'cozinhar',
            'status' => 'ativo'
        ]);
    }
}
