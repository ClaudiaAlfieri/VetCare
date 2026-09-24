@extends('layout.main')

@section('title', 'Animais - VetCare')

@section('content')

    <!-- Cabeçalho da página -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="h2 mb-1">Animais</h1>
            <p class="text-muted mb-0">Gestão dos animais registados na clínica.</p>
        </div>

        <a href="{{ route('pets.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Novo animal
        </a>

    </div>


    <!-- MENSAGEM FLASH -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- PESQUISA / FILTROS -->
            <form class="row g-3 mb-4">
                <div class="col-md-6">
                    <input type="search" class="form-control" placeholder="Pesquisar animal...">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>Todas as espécies</option>
                        <option>Cão</option>
                        <option>Gato</option>
                        <option>Coelho</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-outline-primary w-100">
                        <i class="bi bi-search"></i>
                        Pesquisar
                    </button>
                </div>
            </form>


            <!-- LISTAGEM -->
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Espécie</th>
                        <th>Tutor</th>
                        <th>Data nascimento</th>
                        <th>Estado</th>
                        <th class="text-end">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($pets as $pet)
                        <tr>
                            <td>{{ $pet->id }}</td>
                            <td><strong>{{ $pet->name }}</strong></td>
                            <td>{{ $pet->species->name }}</td>
                            <td>{{ $pet->owner->name }}</td>
                            <td>{{ $pet->birth_date?->format('d/m/Y') }}</td>
                            <td><span class="badge text-bg-success">Ativo</span></td>
                            <td class="text-end">
                                <a href="{{ route('pets.show', $pet) }}" class="btn btn-sm btn-outline-secondary" title="Ver">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('pets.edit', $pet) }}" class="btn btn-sm btn-outline-primary" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('pets.destroy', $pet) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Eliminar" onclick="return confirm('Tem a certeza que pretende eliminar {{ $pet->name }}?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">Nenhum animal registado.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>


            <!-- PAGINAÇÃO -->
            <nav>
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Anterior</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Seguinte</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

@endsection
