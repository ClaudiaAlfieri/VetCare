@extends('layout.main')

@section('title', 'Detalhe do Veterinário - VetCare')

@section('content')

    <!-- Cabeçalho da página -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="h2 mb-1">{{ $veterinarian->name }}</h1>
            <p class="text-muted mb-0">Detalhe do veterinário.</p>
        </div>

        <div class="d-flex gap-2">
            <a href="{{ route('veterinarians.edit', $veterinarian) }}" class="btn btn-primary">
                <i class="bi bi-pencil"></i>
                Editar
            </a>
            <a href="{{ route('veterinarians.index') }}" class="btn btn-secondary">Voltar</a>
        </div>

    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <dl class="row mb-0">
                <dt class="col-sm-3">Nome</dt>
                <dd class="col-sm-9">{{ $veterinarian->name }}</dd>

                <dt class="col-sm-3">Especialidade</dt>
                <dd class="col-sm-9">{{ $veterinarian->specialty }}</dd>

                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">{{ $veterinarian->email }}</dd>

                <dt class="col-sm-3">Telefone</dt>
                <dd class="col-sm-9">{{ $veterinarian->phone }}</dd>
            </dl>

        </div>
    </div>

@endsection
