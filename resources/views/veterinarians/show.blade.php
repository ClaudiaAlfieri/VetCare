<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dr. João Almeida - VetCare</title>

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

            <a class="nav-link" href="#">
                Consultas
            </a>

            <a class="nav-link active" href="index.html">
                Veterinários
            </a>

            <a class="nav-link" href="#">
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

            <span class="badge text-bg-primary mb-2">
                Clínica Geral
            </span>

            <h1>
                Dr. João Almeida
            </h1>

            <p class="text-muted">
                Veterinário #1
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
                        Informação do veterinário
                    </h2>


                    <div class="row">

                        <div class="col-md-6">

                            <p>
                                <strong>Especialidade:</strong><br>
                                Clínica Geral
                            </p>

                            <p>
                                <strong>Email:</strong><br>
                                joao.almeida@vetcare.pt
                            </p>

                        </div>


                        <div class="col-md-6">

                            <p>
                                <strong>Telefone:</strong><br>
                                912 345 678
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 CONSULTAS
            ================================================== -->
            <div class="card shadow-sm">

                <div class="card-body">

                    <h2 class="h4 mb-4">
                        Consultas realizadas
                    </h2>


                    <div class="table-responsive">

                        <table class="table align-middle">

                            <thead>

                            <tr>
                                <th>Data</th>
                                <th>Animal</th>
                                <th>Motivo</th>
                                <th>Estado</th>
                            </tr>

                            </thead>

                            <tbody>

                            <tr>

                                <td>
                                    12/09/2026
                                </td>

                                <td>
                                    Max
                                </td>

                                <td>
                                    Consulta de rotina
                                </td>

                                <td>
                                    <span class="badge text-bg-success">
                                        Realizada
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    20/11/2026
                                </td>

                                <td>
                                    Luna
                                </td>

                                <td>
                                    Vacinação
                                </td>

                                <td>
                                    <span class="badge text-bg-warning">
                                        Agendada
                                    </span>
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

            <div class="card shadow-sm mb-4">

                <div class="card-body">

                    <h2 class="h5 mb-3">
                        Contacto
                    </h2>


                    <p class="text-muted">

                        <i class="bi bi-envelope me-2"></i>
                        joao.almeida@vetcare.pt

                    </p>


                    <p class="text-muted mb-0">

                        <i class="bi bi-telephone me-2"></i>
                        912 345 678

                    </p>

                </div>

            </div>


            <div class="card shadow-sm">

                <div class="card-body">

                    <h2 class="h5 mb-3">
                        Estatísticas
                    </h2>

                    <p class="mb-1">
                        <strong>Consultas realizadas:</strong>
                    </p>

                    <p class="fs-4 mb-0">
                        2
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
