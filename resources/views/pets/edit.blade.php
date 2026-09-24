@extends('layout.main')

@section('title', 'Editar Animal - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Editar animal</h1>
        <p class="text-muted">Max</p>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FORMULÁRIO -->
            <form>

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" id="name" class="form-control" value="Max">
                </div>


                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="owner" class="form-label">Tutor</label>
                        <select id="owner" class="form-select">
                            <option selected>Ana Silva</option>
                            <option>João Santos</option>
                            <option>Maria Costa</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="species" class="form-label">Espécie</label>
                        <select id="species" class="form-select">
                            <option selected>Cão</option>
                            <option>Gato</option>
                            <option>Coelho</option>
                        </select>
                    </div>

                </div>


                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="birthDate" class="form-label">Data de nascimento</label>
                        <input type="date" id="birthDate" class="form-control" value="2021-03-12">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="weight" class="form-label">Peso (kg)</label>
                        <input type="number" step="0.01" id="weight" class="form-control" value="24.50">
                    </div>

                </div>


                <div class="mb-3">
                    <label for="sex" class="form-label">Sexo</label>
                    <select id="sex" class="form-select">
                        <option selected>Macho</option>
                        <option>Fêmea</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="description" class="form-label">Observações</label>
                    <textarea id="description" class="form-control" rows="4">Animal sociável. Sem alergias conhecidas.</textarea>
                </div>


                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="active" checked>
                    <label class="form-check-label" for="active">Animal ativo</label>
                </div>


                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Guardar alterações
                    </button>
                    <a href="{{ url('/pets') }}" class="btn btn-secondary">
                        Cancelar
                    </a>
                </div>@extends('layout.main')

                @section('title', 'Editar ' . $pet->name . ' - VetCare')

                @section('content')

                    <div class="mb-4">
                        <h1 class="h2">Editar animal</h1>
                        <p class="text-muted">{{ $pet->name }}</p>
                    </div>


                    <div class="card shadow-sm">
                        <div class="card-body">

                            <!-- FORMULÁRIO -->
                            <form method="POST" action="{{ route('pets.update', $pet) }}">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="name" class="form-label">Nome</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $pet->name) }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="row">

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

            </form>

        </div>
    </div>

@endsection
