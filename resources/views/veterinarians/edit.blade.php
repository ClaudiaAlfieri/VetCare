@extends('layout.main')

@section('title', 'Editar Veterinário - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Editar veterinário</h1>
        <p class="text-muted">Altere os dados de {{ $veterinarian->name }}.</p>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FORMULÁRIO -->
            <form method="POST" action="{{ route('veterinarians.update', $veterinarian) }}">
                @csrf
                @method('PUT')

                <div class="row">

                    <!-- Nome -->
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $veterinarian->name) }}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Especialidade -->
                    <div class="col-md-6 mb-3">
                        <label for="specialty" class="form-label">Especialidade</label>
                        <input type="text" name="specialty" id="specialty" class="form-control @error('specialty') is-invalid @enderror" value="{{ old('specialty', $veterinarian->specialty) }}">
                        @error('specialty')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="row">

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $veterinarian->email) }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Telefone -->
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Telefone</label>
                        <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $veterinarian->phone) }}">
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <!-- Botões -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Guardar alterações
                    </button>
                    <a href="{{ route('veterinarians.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

@endsection
