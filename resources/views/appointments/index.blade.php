@extends('layout.main')

@section('title', 'Consultas - VetCare')

@section('content')

    <!-- Cabeçalho da página -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="h2 mb-1">Consultas</h1>
            <p class="text-muted mb-0">Gestão das consultas agendadas e realizadas na clínica.</p>
        </div>

        <a href="create.html" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Nova consulta
        </a>

    </div>


    <!-- MENSAGEM FLASH DE EXEMPLO -->
    <div class="alert alert-success alert-dismissible fade show">
        Consulta registada com sucesso.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>


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

                    <tr>
                        <td>1</td>
                        <td>12/09/2026</td>
                        <td><strong>Max</strong></td>
                        <td>Dr. João Almeida</td>
                        <td>Consulta de rotina</td>
                        <td><span class="badge text-bg-success">Realizada</span></td>
                        <td class="text-end">
                            <a href="show.html" class="btn btn-sm btn-outline-secondary" title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="edit.html" class="btn btn-sm btn-outline-primary" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Eliminar">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>20/11/2026</td>
                        <td><strong>Luna</strong></td>
                        <td>Dra. Marta Sousa</td>
                        <td>Vacinação</td>
                        <td><span class="badge text-bg-warning">Agendada</span></td>
                        <td class="text-end">
                            <a href="show.html" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="edit.html" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>05/10/2026</td>
                        <td><strong>Tobias</strong></td>
                        <td>Dr. Pedro Nogueira</td>
                        <td>Cirurgia de esterilização, Consulta de rotina</td>
                        <td><span class="badge text-bg-secondary">Cancelada</span></td>
                        <td class="text-end">
                            <a href="show.html" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="edit.html" class="btn btn-sm btn-outline-primary">
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
                    <h5 class="modal-title">Eliminar consulta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Tem a certeza de que pretende eliminar
                    a consulta de <strong>Max</strong> em <strong>12/09/2026</strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
