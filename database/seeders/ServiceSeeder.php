<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'name' => 'Consulta de rotina',
            'description' => 'Avaliação geral de saúde do animal',
            'price' => 25.00,
        ]);

        Service::create([
            'name' => 'Vacinação',
            'description' => 'Administração de vacina de rotina',
            'price' => 18.50,
        ]);

        Service::create([
            'name' => 'Cirurgia de esterilização',
            'description' => 'Procedimento cirúrgico de esterilização',
            'price' => 120.00,
        ]);
    }
}
