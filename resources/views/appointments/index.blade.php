@extends('layout.main')

@section('title', 'Consultas - VetCare')

@section('content')

    <!-- Cabeçalho da página -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="h2 mb-1">Consultas</h1>
            <p class="text-muted mb-0">Gestão das consultas agendadas e realizadas na clínica.</p>
        </div>

        <a href="{{ route('appointments.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Nova consulta
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
                    <input type="search" class="form-control" placeholder="Pesquisar consulta...">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>Todos os estados</option>
                        <option>Agendada</option>
                        <option>Realizada</option>
                        <option>Cancelada</option>
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
                        <th>Data</th>
                        <th>Animal</th>
                        <th>Veterinário</th>
                        <th>Serviço(s)</th>
                        <th>Estado</th>
                        <th class="text-end">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->id }}</td>
                            <td>{{ $appointment->date->format('d/m/Y') }}</td>
                            <td><strong>{{ $appointment->pet->name }}</strong></td>
                            <td>{{ $appointment->veterinarian->name }}</td>
                            <td>{{ $appointment->services->pluck('name')->join(', ') }}</td>
                            <td>
                                @if ($appointment->status === 'realizada')
                                    <span class="badge text-bg-success">Realizada</span>
                                @elseif ($appointment->status === 'agendada')
                                    <span class="badge text-bg-warning">Agendada</span>
                                @else
                                    <span class="badge text-bg-secondary">Cancelada</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="{{ route('appointments.show', $appointment) }}" class="btn btn-sm btn-outline-secondary" title="Ver">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-sm btn-outline-primary" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Eliminar" onclick="return confirm('Tem a certeza que pretende eliminar esta consulta?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">Nenhuma consulta registada.</td>
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
