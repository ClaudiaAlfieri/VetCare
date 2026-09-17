<?php

namespace Database\Seeders;

use App\Models\Species;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Species::create(['name' => 'Cão']);
        Species::create(['name' => 'Gato']);
        Species::create(['name' => 'Coelho']);
        Species::create(['name' => 'Ave']);
    }
}
