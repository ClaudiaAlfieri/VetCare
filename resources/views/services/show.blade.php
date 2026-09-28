@extends('layout.main')

@section('title', 'Consulta de rotina - VetCare')

@section('content')

    <!-- Cabeçalho -->
    <div class="d-flex justify-content-between align-items-start mb-4">

        <div>
            <span class="badge text-bg-primary mb-2">25,00 €</span>
            <h1>Consulta de rotina</h1>
            <p class="text-muted">Serviço #1</p>
        </div>

        <div>
            <a href="edit.html" class="btn btn-primary">
                <i class="bi bi-pencil"></i>
                Editar
            </a>
            <a href="index.html" class="btn btn-outline-secondary">Voltar</a>
        </div>

    </div>


    <div class="row g-4">

        <!-- COLUNA PRINCIPAL -->
        <div class="col-lg-8">

            <!-- Informação -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">

                    <h2 class="h4 mb-4">Informação do serviço</h2>

                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <strong>Descrição:</strong><br>
                                Avaliação geral de saúde do animal
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <strong>Preço:</strong><br>
                                25,00 €
                            </p>
                        </div>
                    </div>

                </div>
            </div>


            <!-- CONSULTAS -->
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
                            <tr>
                                <td>Consulta de rotina</td>
                                <td class="text-end">25,00 €</td>
                            </tr>
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
                        <p class="fs-4 mb-0">25,00 €</p>

                    </div>
                </div>

            </div>

    </div>

@endsection
