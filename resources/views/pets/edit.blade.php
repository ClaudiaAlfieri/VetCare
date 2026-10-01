@extends('layout.main')

@section('title', 'Editar ' . $pet->name . ' - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Editar animal</h1>
        <p class="text-muted">{{ $pet->name }}</p>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FORMULÁRIO -->
            <form method="POST" action="{{ route('pets.update', $pet) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $pet->name) }}">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Fotografia -->
                <div class="mb-3">
                    <label for="photo" class="form-label">Fotografia</label>
                    @if ($pet->photo)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $pet->photo) }}" alt="{{ $pet->name }}" class="img-thumbnail" style="max-width: 150px;">
                        </div>
                    @endif
                    <input type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror" accept="image/*">
                    @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="row">

                    @role('admin')
                    <div class="col-md-6 mb-3">
                        <label for="user_id" class="form-label">Tutor</label>
                        <select name="user_id" id="user_id" class="form-select @error('user_id') is-invalid @enderror">
                            @foreach ($owners as $owner)
                                <option value="{{ $owner->id }}" @selected(old('user_id', $pet->user_id) == $owner->id)>{{ $owner->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    @endrole

                    <div class="col-md-6 mb-3">
                        <label for="species_id" class="form-label">Espécie</label>
                        <select name="species_id" id="species_id" class="form-select @error('species_id') is-invalid @enderror">
                            @foreach ($species as $s)
                                <option value="{{ $s->id }}" @selected(old('species_id', $pet->species_id) == $s->id)>{{ $s->name }}</option>
                            @endforeach
                        </select>
                        @error('species_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="birthDate" class="form-label">Data de nascimento</label>
                        <input type="date" name="birth_date" id="birthDate" class="form-control" value="{{ old('birth_date', $pet->birth_date?->format('Y-m-d')) }}">
                    </div>

                </div>


                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Guardar alterações
                    </button>
                    <a href="{{ route('pets.index') }}" class="btn btn-secondary">
                        Cancelar
                    </a>
                </div>

            </form>

        </div>
    </div>

@endsection
