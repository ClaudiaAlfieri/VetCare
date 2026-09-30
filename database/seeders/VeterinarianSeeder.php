<?php

namespace Database\Seeders;

use App\Models\Veterinarian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeterinarianSeeder extends Seeder
{
    public function run(): void
    {
        Veterinarian::create([
            'name' => 'Dr. João Almeida',
            'specialty' => 'Clínica Geral',
            'email' => 'joao.almeida@vetcare.pt',
            'phone' => '912 345 678',
        ]);

        Veterinarian::create([
            'name' => 'Dra. Marta Sousa',
            'specialty' => 'Dermatologia',
            'email' => 'marta.sousa@vetcare.pt',
            'phone' => '913 456 789',
        ]);

        Veterinarian::create([
            'name' => 'Dr. Pedro Nogueira',
            'specialty' => 'Cirurgia',
            'email' => 'pedro.nogueira@vetcare.pt',
            'phone' => '914 567 890',
        ]);
    }
}
