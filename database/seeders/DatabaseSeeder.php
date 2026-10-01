<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        // User::factory(10)->create();

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@vetcare.pt',
        ]);
        $admin->assignRole('admin');

        $anaSilva = User::factory()->create([
            'name' => 'Ana Silva',
            'email' => 'user@vetcare.pt',
        ]);
        $anaSilva->assignRole('user');

        $joaoSantos = User::factory()->create([
            'name' => 'João Santos',
            'email' => 'joao@vetcare.pt',
        ]);
        $joaoSantos->assignRole('user');

        $mariaCosta = User::factory()->create([
            'name' => 'Maria Costa',
            'email' => 'maria@vetcare.pt',
        ]);
        $mariaCosta->assignRole('user');

        $this->call(SpeciesSeeder::class);
        $this->call(PetSeeder::class);
        $this->call(VeterinarianSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(AppointmentSeeder::class);
    }
}
