<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Consulta #1 - VetCare</title>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-light">

<!-- =========================================================
     MENU / NAVEGAÇÃO
========================================================= -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand fw-bold" href="../home.html">
            <i class="bi bi-heart-pulse"></i>
            VetCare
        </a>

        <div class="navbar-nav me-auto">

            <a class="nav-link" href="../home.html">
                Início
            </a>

            <a class="nav-link" href="../pets/index.html">
                Animais
            </a>

            <a class="nav-link active" href="index.html">
                Consultas
            </a>

            <a class="nav-link" href="../veterinarians/index.html">
                Veterinários
            </a>

            <a class="nav-link" href="../services/index.html">
                Serviços
            </a>

        </div>

        <span class="navbar-text">
            admin@vetcare.pt
        </span>

    </div>

</nav>


<!-- =========================================================
     CONTEÚDO PRINCIPAL
========================================================= -->
<main class="container py-5">

    <!-- Cabeçalho -->
    <div class="d-flex justify-content-between align-items-start mb-4">

        <div>

            <span class="badge text-bg-success mb-2">
                Realizada
            </span>

            <h1>
                Consulta de 12/09/2026
            </h1>

            <p class="text-muted">
                Consulta #1
            </p>

        </div>


        <div>

            <a href="edit.html" class="btn btn-primary">
                <i class="bi bi-pencil"></i>
                Editar
            </a>

            <a href="index.html" class="btn btn-outline-secondary">
                Voltar
            </a>

        </div>

    </div>


    <div class="row g-4">

        <!-- =====================================================
             COLUNA PRINCIPAL
        ====================================================== -->
        <div class="col-lg-8">

            <!-- Informação -->
            <div class="card shadow-sm mb-4">

                <div class="card-body">

                    <h2 class="h4 mb-4">
                        Informação da consulta
                    </h2>


                    <div class="row">

                        <div class="col-md-6">

                            <p>
                                <strong>Animal:</strong><br>
                                Max
                            </p>

                            <p>
                                <strong>Veterinário:</strong><br>
                                Dr. João Almeida
                            </p>

                        </div>


                        <div class="col-md-6">

                            <p>
                                <strong>Data:</strong><br>
                                12/09/2026
                            </p>

                            <p>
                                <strong>Estado:</strong><br>
                                Realizada
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 SERVIÇOS
            ================================================== -->
            <div class="card shadow-sm">

                <div class="card-body">

                    <h2 class="h4 mb-4">
                        Serviços incluídos
                    </h2>


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

                                <td>
                                    Consulta de rotina
                                </td>

                                <td class="text-end">
                                    25,00 €
                                </td>

                            </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>


        <!-- =====================================================
             COLUNA LATERAL
        ====================================================== -->
        <div class="col-lg-4">

            <div class="card shadow-sm">

                <div class="card-body">

                    <h2 class="h5 mb-3">
                        Resumo
                    </h2>

                    <p class="mb-1">
                        <strong>Total:</strong>
                    </p>

                    <p class="fs-4 mb-0">
                        25,00 €
                    </p>

                </div>

            </div>

        </div>

    </div>

</main>


<!-- =========================================================
     RODAPÉ
========================================================= -->
<footer class="bg-dark text-white py-4 mt-5">

    <div class="container text-center">

        <small>
            &copy; 2026 VetCare
        </small>

    </div>

</footer>

</body>
</html>
