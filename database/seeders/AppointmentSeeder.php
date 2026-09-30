<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Pet;
use App\Models\Service;
use App\Models\Veterinarian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    public function run(): void
    {
        $max = Pet::where('name', 'Max')->first();
        $luna = Pet::where('name', 'Luna')->first();

        $drJoao = Veterinarian::where('name', 'Dr. João Almeida')->first();
        $draMarta = Veterinarian::where('name', 'Dra. Marta Sousa')->first();
        $drPedro = Veterinarian::where('name', 'Dr. Pedro Nogueira')->first();

        $consulta = Service::where('name', 'Consulta de rotina')->first();
        $vacinacao = Service::where('name', 'Vacinação')->first();
        $cirurgia = Service::where('name', 'Cirurgia de esterilização')->first();

        $appointment1 = Appointment::create([
            'pet_id' => $max->id,
            'veterinarian_id' => $drJoao->id,
            'date' => '2026-09-12',
            'status' => 'realizada',
        ]);
        $appointment1->services()->attach($consulta->id);

        $appointment2 = Appointment::create([
            'pet_id' => $luna->id,
            'veterinarian_id' => $draMarta->id,
            'date' => '2026-11-20',
            'status' => 'agendada',
        ]);
        $appointment2->services()->attach($vacinacao->id);

        $appointment3 = Appointment::create([
            'pet_id' => $max->id,
            'veterinarian_id' => $drPedro->id,
            'date' => '2026-10-05',
            'status' => 'cancelada',
        ]);
        $appointment3->services()->attach([$cirurgia->id, $consulta->id]);
    }
}
