@extends('layout.main')

@section('title', 'Editar ' . $service->name . ' - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Editar serviço</h1>
        <p class="text-muted">{{ $service->name }}</p>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FORMULÁRIO -->
            <form method="POST" action="{{ route('services.update', $service) }}">
                @csrf
                @method('PUT')

                <!-- Nome -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $service->name) }}">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Descrição -->
                <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{ old('description', $service->description) }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Preço -->
                <div class="mb-4">
                    <label for="price" class="form-label">Preço (€)</label>
                    <input type="number" step="0.01" min="0" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $service->price) }}">
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Botões -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Guardar alterações
                    </button>
                    <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

@endsection
