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

        $tutor = User::factory()->create([
            'name' => 'Tutor',
            'email' => 'user@vetcare.pt',
        ]);
        $tutor->assignRole('user');

        $this->call(SpeciesSeeder::class);
        $this->call(PetSeeder::class);
    }
}
