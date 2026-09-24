@extends('layout.main')

@section('title', 'Novo Animal - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Novo animal</h1>
        <p class="text-muted">Preencha os dados do novo animal.</p>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FORMULÁRIO -->
            <form method="POST" action="{{ route('pets.store') }}">
                @csrf

                <!-- Nome -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="row">

                    <!-- Tutor -->
                    <div class="col-md-6 mb-3">
                        <label for="user_id" class="form-label">Tutor</label>
                        <select name="user_id" id="user_id" class="form-select @error('user_id') is-invalid @enderror">
                            <option value="">Selecione...</option>
                            @foreach ($owners as $owner)
                                <option value="{{ $owner->id }}" @selected(old('user_id') == $owner->id)>{{ $owner->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Espécie -->
                    <div class="col-md-6 mb-3">
                        <label for="species_id" class="form-label">Espécie</label>
                        <select name="species_id" id="species_id" class="form-select @error('species_id') is-invalid @enderror">
                            <option value="">Selecione...</option>
                            @foreach ($species as $s)
                                <option value="{{ $s->id }}" @selected(old('species_id') == $s->id)>{{ $s->name }}</option>
                            @endforeach
                        </select>
                        @error('species_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="row">

                    <!-- Data de nascimento -->
                    <div class="col-md-6 mb-3">
                        <label for="birthDate" class="form-label">Data de nascimento</label>
                        <input type="date" name="birth_date" id="birthDate" class="form-control" value="{{ old('birth_date') }}">
                    </div>

                </div>


                <!-- Botões -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Registar animal
                    </button>
                    <a href="{{ route('pets.index') }}" class="btn btn-secondary">
                        Cancelar
                    </a>
                </div>

            </form>

        </div>
    </div>

@endsection
