@extends('layout.main')

@section('title', 'Animais - VetCare')

@section('content')

    <!-- Cabeçalho da página -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="h2 mb-1">Animais</h1>
            <p class="text-muted mb-0">Gestão dos animais registados na clínica.</p>
        </div>

        <a href="{{ url('/pets/create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Novo animal
        </a>

    </div>


    <!-- MENSAGEM FLASH DE EXEMPLO -->
    <div class="alert alert-success alert-dismissible fade show">
        Animal registado com sucesso.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>


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
                    <tr>
                        <td>1</td>
                        <td><strong>Max</strong></td>
                        <td>Cão</td>
                        <td>Ana Silva</td>
                        <td>12/03/2021</td>
                        <td><span class="badge text-bg-success">Ativo</span></td>
                        <td class="text-end">
                            <a href="{{ url('/pets/1') }}" class="btn btn-sm btn-outline-secondary" title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ url('/pets/1/edit') }}" class="btn btn-sm btn-outline-primary" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Eliminar">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong>Luna</strong></td>
                        <td>Gato</td>
                        <td>João Santos</td>
                        <td>07/08/2022</td>
                        <td><span class="badge text-bg-success">Ativo</span></td>
                        <td class="text-end">
                            <a href="{{ url('/pets/1') }}" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ url('/pets/1/edit') }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><strong>Tobias</strong></td>
                        <td>Coelho</td>
                        <td>Maria Costa</td>
                        <td>15/01/2024</td>
                        <td><span class="badge text-bg-secondary">Inativo</span></td>
                        <td class="text-end">
                            <a href="{{ url('/pets/1') }}" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ url('/pets/1/edit') }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
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


    <!-- MODAL DE CONFIRMAÇÃO DE ELIMINAÇÃO -->
    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar animal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Tem a certeza de que pretende eliminar <strong>Max</strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

@endsection
