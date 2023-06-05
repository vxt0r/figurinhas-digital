<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jogador;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Jogador::create([
            'nome' => 'Lebron James',
            'time' => 'Lakers',
            'posicao' => 'PF',
            'altura' => 2.06
        ]);
    }
}
