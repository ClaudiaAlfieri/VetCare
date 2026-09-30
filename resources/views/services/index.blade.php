@extends('layout.main')

@section('title', 'Serviços - VetCare')

@section('content')

    <!-- Cabeçalho da página -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="h2 mb-1">Serviços</h1>
            <p class="text-muted mb-0">Gestão dos serviços prestados pela clínica.</p>
        </div>

        <a href="{{ route('services.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Novo serviço
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
                <div class="col-md-9">
                    <input type="search" class="form-control" placeholder="Pesquisar serviço...">
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
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th class="text-end">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td><strong>{{ $service->name }}</strong></td>
                            <td>{{ $service->description }}</td>
                            <td>{{ number_format($service->price, 2, ',', '.') }} €</td>
                            <td class="text-end">
                                <a href="{{ route('services.show', $service) }}" class="btn btn-sm btn-outline-secondary" title="Ver">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-outline-primary" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('services.destroy', $service) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Eliminar" onclick="return confirm('Tem a certeza que pretende eliminar {{ $service->name }}?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">Nenhum serviço registado.</td>
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
                        <a class="page-link" href="#">Seguinte</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

@endsection
