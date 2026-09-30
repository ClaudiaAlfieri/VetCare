@extends('layout.main')

@section('title', $service->name . ' - VetCare')

@section('content')

    <!-- Cabeçalho -->
    <div class="d-flex justify-content-between align-items-start mb-4">

        <div>
            <span class="badge text-bg-primary mb-2">{{ number_format($service->price, 2, ',', '.') }} €</span>
            <h1>{{ $service->name }}</h1>
            <p class="text-muted">Serviço #{{ $service->id }}</p>
        </div>

        <div>
            <a href="{{ route('services.edit', $service) }}" class="btn btn-primary">
                <i class="bi bi-pencil"></i>
                Editar
            </a>
            <a href="{{ route('services.index') }}" class="btn btn-outline-secondary">Voltar</a>
        </div>

    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <h2 class="h4 mb-4">Informação do serviço</h2>

            <div class="row">
                <div class="col-md-6">
                    <p>
                        <strong>Descrição:</strong><br>
                        {{ $service->description ?? 'Sem descrição.' }}
                    </p>
                </div>
                <div class="col-md-6">
                    <p>
                        <strong>Preço:</strong><br>
                        {{ number_format($service->price, 2, ',', '.') }} €
                    </p>
                </div>
            </div>

        </div>
    </div>

@endsection
