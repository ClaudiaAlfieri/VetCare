<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Pet;
use App\Models\Service;
use App\Models\Veterinarian;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with(['pet', 'veterinarian', 'services'])->get();

        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pets = Pet::all();
        $veterinarians = Veterinarian::all();
        $services = Service::all();

        return view('appointments.create', compact('pets', 'veterinarians', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pet_id' => ['required', 'exists:pets,id'],
            'veterinarian_id' => ['required', 'exists:veterinarians,id'],
            'date' => ['required', 'date'],
            'status' => ['required', 'in:agendada,realizada,cancelada'],
            'services' => ['nullable', 'array'],
            'services.*' => ['exists:services,id'],
        ]);

        $appointment = Appointment::create($validated);
        $appointment->services()->attach($validated['services'] ?? []);

        return redirect()->route('appointments.index')->with('success', 'Consulta registada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        $appointment->load(['pet', 'veterinarian', 'services', 'notes.user']);

        return view('appointments.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        $pets = Pet::all();
        $veterinarians = Veterinarian::all();
        $services = Service::all();
        $appointment->load('services');

        return view('appointments.edit', compact('appointment', 'pets', 'veterinarians', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        $validated = $request->validate([
            'pet_id' => ['required', 'exists:pets,id'],
            'veterinarian_id' => ['required', 'exists:veterinarians,id'],
            'date' => ['required', 'date'],
            'status' => ['required', 'in:agendada,realizada,cancelada'],
            'services' => ['nullable', 'array'],
            'services.*' => ['exists:services,id'],
        ]);

        $appointment->update($validated);
        $appointment->services()->sync($validated['services'] ?? []);

        return redirect()->route('appointments.index')->with('success', 'Consulta atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index')->with('success', 'Consulta eliminada com sucesso.');
    }
}
