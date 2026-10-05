<?php

namespace App\Http\Controllers;

use App\Models\Veterinarian;
use Illuminate\Http\Request;

class VeterinarianController extends Controller
{
    public function index()
    {
        $veterinarians = Veterinarian::all();

        return view('veterinarians.index', compact('veterinarians'));
    }

    public function create()
    {
        return view('veterinarians.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'specialty' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
        ]);

        Veterinarian::create($validated);

        return redirect()->route('veterinarians.index')
            ->with('success', 'Veterinário registado com sucesso.');
    }

    public function show(Veterinarian $veterinarian)
    {
        return view('veterinarians.show', compact('veterinarian'));
    }

    public function edit(Veterinarian $veterinarian)
    {
        return view('veterinarians.edit', compact('veterinarian'));
    }

    public function update(Request $request, Veterinarian $veterinarian)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'specialty' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
        ]);

        $veterinarian->update($validated);

        return redirect()->route('veterinarians.index')
            ->with('success', 'Veterinário atualizado com sucesso.');
    }

    public function destroy(Veterinarian $veterinarian)
    {
        $veterinarian->delete();

        return redirect()->route('veterinarians.index')
            ->with('success', 'Veterinário eliminado com sucesso.');
    }
}
