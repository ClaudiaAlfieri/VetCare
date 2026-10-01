<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\Species;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anaSilva = User::where('email', 'user@vetcare.pt')->first();
        $joaoSantos = User::where('email', 'joao@vetcare.pt')->first();
        $mariaCosta = User::where('email', 'maria@vetcare.pt')->first();

        $dog = Species::where('name', 'Cão')->first();
        $cat = Species::where('name', 'Gato')->first();
        $rabbit = Species::where('name', 'Coelho')->first();

        Pet::create([
            'name' => 'Max',
            'birth_date' => '2021-03-12',
            'species_id' => $dog->id,
            'user_id' => $anaSilva->id,
        ]);

        Pet::create([
            'name' => 'Luna',
            'birth_date' => '2022-08-07',
            'species_id' => $cat->id,
            'user_id' => $joaoSantos->id,
        ]);

        Pet::create([
            'name' => 'Tobias',
            'birth_date' => '2024-01-15',
            'species_id' => $rabbit->id,
            'user_id' => $mariaCosta->id,
        ]);
    }
}
