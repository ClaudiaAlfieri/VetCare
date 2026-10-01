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
    public function index(Request $request)
    {
        $query = Pet::with(['species', 'owner']);

        if (! auth()->user()->hasRole('admin')) {
            $query->where('user_id', auth()->id());
        }

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('species_id')) {
            $query->where('species_id', $request->species_id);
        }

        $pets = $query->paginate(10)->withQueryString();
        $species = Species::all();

        return view('pets.index', compact('pets', 'species'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $species = Species::all();
        $owners = auth()->user()->hasRole('admin') ? User::role('user')->get() : collect();

        return view('pets.create', compact('species', 'owners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'species_id' => ['required', 'exists:species,id'],
            'birth_date' => ['nullable', 'date'],
        ];

        if (auth()->user()->hasRole('admin')) {
            $rules['user_id'] = ['required', 'exists:users,id'];
        }

        $validated = $request->validate($rules);

        $validated['user_id'] = auth()->user()->hasRole('admin')
            ? $validated['user_id']
            : auth()->id();

        Pet::create($validated);

        return redirect()->route('pets.index')->with('success', 'Animal registado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        abort_if(! auth()->user()->hasRole('admin') && $pet->user_id !== auth()->id(), 403);

        $pet->load(['species', 'owner', 'notes.user']);

        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        abort_if(! auth()->user()->hasRole('admin') && $pet->user_id !== auth()->id(), 403);

        $species = Species::all();
        $owners = auth()->user()->hasRole('admin') ? User::role('user')->get() : collect();

        return view('pets.edit', compact('pet', 'species', 'owners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        abort_if(! auth()->user()->hasRole('admin') && $pet->user_id !== auth()->id(), 403);

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'species_id' => ['required', 'exists:species,id'],
            'birth_date' => ['nullable', 'date'],
        ];

        if (auth()->user()->hasRole('admin')) {
            $rules['user_id'] = ['required', 'exists:users,id'];
        }

        $validated = $request->validate($rules);

        $pet->update($validated);

        return redirect()->route('pets.index')->with('success', 'Animal atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        abort_if(! auth()->user()->hasRole('admin') && $pet->user_id !== auth()->id(), 403);

        $pet->delete();

        return redirect()->route('pets.index')->with('success', 'Animal eliminado com sucesso.');
    }
}
