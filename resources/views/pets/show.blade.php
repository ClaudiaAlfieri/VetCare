@extends('layout.main')

@section('title', 'Max - VetCare')

@section('content')

    <!-- Cabeçalho -->
    <div class="d-flex justify-content-between align-items-start mb-4">

        <div>
            <span class="badge text-bg-primary mb-2">Cão</span>
            <h1>Max</h1>
            <p class="text-muted">Animal #1</p>
        </div>

        <div>
            <a href="{{ url('/pets/1/edit') }}" class="btn btn-primary">
                <i class="bi bi-pencil"></i>
                Editar
            </a>
            <a href="{{ url('/pets') }}" class="btn btn-outline-secondary">
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
                            <p><strong>Espécie:</strong><br>Cão</p>
                            <p><strong>Sexo:</strong><br>Macho</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Data de nascimento:</strong><br>12 março 2021</p>
                            <p><strong>Peso:</strong><br>24,5 kg</p>
                        </div>
                    </div>

                    <hr>

                    <h3 class="h6">Observações</h3>
                    <p class="mb-0">Animal sociável. Sem alergias conhecidas.</p>
                </div>
            </div>


            <!-- CONSULTAS -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Consultas</h2>

                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                            <tr>
                                <th>Data</th>
                                <th>Veterinário</th>
                                <th>Motivo</th>
                                <th>Estado</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>12/09/2026</td>
                                <td>Dr. Pedro Martins</td>
                                <td>Consulta de rotina</td>
                                <td><span class="badge text-bg-success">Realizada</span></td>
                            </tr>
                            <tr>
                                <td>20/11/2026</td>
                                <td>Dra. Sofia Costa</td>
                                <td>Vacinação</td>
                                <td><span class="badge text-bg-warning">Agendada</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- NOTAS (exemplo de informação proveniente da relação polimórfica) -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="h4 mb-4">Notas</h2>

                    <div class="border-bottom pb-3 mb-3">
                        <div class="d-flex justify-content-between">
                            <strong>Dr. Pedro Martins</strong>
                            <small class="text-muted">12/09/2026</small>
                        </div>
                        <p class="mb-0 mt-2">
                            Animal em bom estado geral.
                            Recomenda-se controlo de peso.
                        </p>
                    </div>

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
                        <strong>Ana Silva</strong>
                    </p>

                    <p class="text-muted">
                        <i class="bi bi-envelope me-2"></i>
                        ana@email.pt
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
                    <p class="fs-4 mb-0">5</p>
                </div>
            </div>

        </div>

    </div>

@endsection
