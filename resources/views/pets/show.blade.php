@extends('layout.main')

@section('title', $pet->name . ' - VetCare')

@section('content')

    <!-- Cabeçalho -->
    <div class="d-flex justify-content-between align-items-start mb-4">

        <div>
            <span class="badge text-bg-primary mb-2">{{ $pet->species->name }}</span>
            <h1>{{ $pet->name }}</h1>
            <p class="text-muted">Animal #{{ $pet->id }}</p>
        </div>

        <div>
            <a href="{{ route('pets.edit', $pet) }}" class="btn btn-primary">
                <i class="bi bi-pencil"></i>
                Editar
            </a>
            <a href="{{ route('pets.index') }}" class="btn btn-outline-secondary">
                Voltar
            </a>
        </div>

    </div>


    <div class="row g-4">

        <!-- COLUNA PRINCIPAL -->
        <div class="col-lg-8">

            <!-- Informação -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Informação do animal</h2>

                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Espécie:</strong><br>{{ $pet->species->name }}</p>
                            <p><strong>Sexo:</strong><br>—</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Data de nascimento:</strong><br>{{ $pet->birth_date?->format('d F Y') }}</p>
                            <p><strong>Peso:</strong><br>—</p>
                        </div>
                    </div>

                    <hr>

                    <h3 class="h6">Observações</h3>
                    <p class="mb-0">—</p>
                </div>
            </div>


            <!-- CONSULTAS -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Consultas</h2>

                    <p class="text-muted mb-0">
                        As consultas deste animal aparecerão aqui quando o módulo de consultas estiver pronto.
                    </p>
                </div>
            </div>


            <!-- NOTAS -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="h4 mb-4">Notas</h2>

                    @forelse ($pet->notes as $note)
                        <div class="border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between">
                                <strong>{{ $note->user->name }}</strong>
                                <small class="text-muted">{{ $note->created_at->format('d/m/Y') }}</small>
                            </div>
                            <p class="mb-0 mt-2">{{ $note->body }}</p>
                        </div>
                    @empty
                        <p class="text-muted">Ainda não há notas para este animal.</p>
                    @endforelse

                    <!-- Formulário para nova nota -->
                    <form>
                        <label for="note" class="form-label">Nova nota</label>
                        <textarea id="note" class="form-control mb-3" rows="3"></textarea>
                        <button type="submit" class="btn btn-primary">Adicionar nota</button>
                    </form>
                </div>
            </div>

        </div>


        <!-- COLUNA LATERAL -->
        <div class="col-lg-4">

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h5 mb-3">Tutor</h2>

                    <p class="mb-1">
                        <i class="bi bi-person me-2"></i>
                        <strong>{{ $pet->owner->name }}</strong>
                    </p>

                    <p class="text-muted">
                        <i class="bi bi-envelope me-2"></i>
                        {{ $pet->owner->email }}
                    </p>

                    <p class="text-muted mb-0">
                        <i class="bi bi-telephone me-2"></i>
                        912 345 678
                    </p>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="h5 mb-3">Estado</h2>
                    <span class="badge text-bg-success">Ativo</span>

                    <hr>

                    <p class="mb-1"><strong>Consultas realizadas:</strong></p>
                    <p class="fs-4 mb-0">—</p>
                </div>
            </div>

        </div>

    </div>

@endsection
