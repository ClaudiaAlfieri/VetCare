@extends('layout.main')

@section('title', 'Veterinários - VetCare')

@section('content')

    <!-- Cabeçalho da página -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="h2 mb-1">Veterinários</h1>
            <p class="text-muted mb-0">Gestão da equipa veterinária da clínica.</p>
        </div>

        <a href="{{ route('veterinarians.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Novo veterinário
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

            <!-- LISTAGEM -->
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Especialidade</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th class="text-end">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($veterinarians as $veterinarian)
                        <tr>
                            <td>{{ $veterinarian->id }}</td>
                            <td><strong>{{ $veterinarian->name }}</strong></td>
                            <td>{{ $veterinarian->specialty }}</td>
                            <td>{{ $veterinarian->email }}</td>
                            <td>{{ $veterinarian->phone }}</td>
                            <td class="text-end">
                                <a href="{{ route('veterinarians.show', $veterinarian) }}" class="btn btn-sm btn-outline-secondary" title="Ver">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('veterinarians.edit', $veterinarian) }}" class="btn btn-sm btn-outline-primary" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('veterinarians.destroy', $veterinarian) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Eliminar" onclick="return confirm('Tem a certeza que pretende eliminar este veterinário?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Ainda não existem veterinários registados.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
