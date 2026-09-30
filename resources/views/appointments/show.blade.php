@extends('layout.main')

@section('title', 'Consulta #' . $appointment->id . ' - VetCare')

@section('content')

    <!-- Cabeçalho -->
    <div class="d-flex justify-content-between align-items-start mb-4">

        <div>
            @if ($appointment->status === 'realizada')
                <span class="badge text-bg-success mb-2">Realizada</span>
            @elseif ($appointment->status === 'agendada')
                <span class="badge text-bg-warning mb-2">Agendada</span>
            @else
                <span class="badge text-bg-secondary mb-2">Cancelada</span>
            @endif
            <h1>Consulta de {{ $appointment->date->format('d/m/Y') }}</h1>
            <p class="text-muted">Consulta #{{ $appointment->id }}</p>
        </div>

        <div>
            <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-primary">
                <i class="bi bi-pencil"></i>
                Editar
            </a>
            <a href="{{ route('appointments.index') }}" class="btn btn-outline-secondary">Voltar</a>
        </div>

    </div>


    <div class="row g-4">

        <!-- COLUNA PRINCIPAL -->
        <div class="col-lg-8">

            <!-- Informação -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">

                    <h2 class="h4 mb-4">Informação da consulta</h2>

                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <strong>Animal:</strong><br>
                                {{ $appointment->pet->name }}
                            </p>
                            <p>
                                <strong>Veterinário:</strong><br>
                                {{ $appointment->veterinarian->name }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Data:</strong><br>
                                {{ $appointment->date->format('d/m/Y') }}
                            </p>
                            <p>
                                <strong>Estado:</strong><br>
                                {{ ucfirst($appointment->status) }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>


            <!-- SERVIÇOS -->
            <div class="card shadow-sm">
                <div class="card-body">

                    <h2 class="h4 mb-4">Serviços incluídos</h2>

                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                            <tr>
                                <th>Serviço</th>
                                <th class="text-end">Preço</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($appointment->services as $service)
                                <tr>
                                    <td>{{ $service->name }}</td>
                                    <td class="text-end">{{ number_format($service->price, 2, ',', '.') }} €</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center text-muted">Nenhum serviço associado.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>


        <!-- COLUNA LATERAL -->
        <div class="col-lg-4">

            <div class="card shadow-sm">
                <div class="card-body">

                    <h2 class="h5 mb-3">Resumo</h2>

                    <p class="mb-1"><strong>Total:</strong></p>
                    <p class="fs-4 mb-0">{{ number_format($appointment->services->sum('price'), 2, ',', '.') }} €</p>

                </div>
            </div>

        </div>

    </div>

@endsection
