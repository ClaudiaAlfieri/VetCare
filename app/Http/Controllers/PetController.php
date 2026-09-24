<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Species;
use App\Models\User;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::with(['species', 'owner'])->get();

        return view('pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $species = Species::all();
        $owners = User::role('user')->get();

        return view('pets.create', compact('species', 'owners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'species_id' => ['required', 'exists:species,id'],
            'user_id' => ['required', 'exists:users,id'],
            'birth_date' => ['nullable', 'date'],
        ]);

        Pet::create($validated);

        return redirect()->route('pets.index')->with('success', 'Animal registado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        $pet->load(['species', 'owner', 'notes.user']);

        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        $species = Species::all();
        $owners = User::role('user')->get();

        return view('pets.edit', compact('pet', 'species', 'owners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'species_id' => ['required', 'exists:species,id'],
            'user_id' => ['required', 'exists:users,id'],
            'birth_date' => ['nullable', 'date'],
        ]);

        $pet->update($validated);

        return redirect()->route('pets.index')->with('success', 'Animal atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();

        return redirect()->route('pets.index')->with('success', 'Animal eliminado com sucesso.');
    }
}
