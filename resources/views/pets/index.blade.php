<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Animais - VetCare</title>

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

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMain"
        >
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarMain">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="../home.html">
                        Início
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="index.html">
                        Animais
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Consultas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Veterinários
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Serviços
                    </a>
                </li>

            </ul>


            <!-- Área do utilizador autenticado -->
            <div class="dropdown">

                <button
                    class="btn btn-outline-light dropdown-toggle"
                    data-bs-toggle="dropdown">

                    <i class="bi bi-person-circle"></i>
                    admin@vetcare.pt

                </button>

                <ul class="dropdown-menu dropdown-menu-end">

                    <li>
                        <span class="dropdown-item-text">
                            Perfil: Admin
                        </span>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
<a
                        class="dropdown-item"
                        href="../login.html">

                        Terminar sessão

                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</nav>


<!-- =========================================================
     CONTEÚDO PRINCIPAL
========================================================= -->
<main class="container py-5">

    <!-- Cabeçalho da página -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h1 class="h2 mb-1">
                Animais
            </h1>

            <p class="text-muted mb-0">
                Gestão dos animais registados na clínica.
            </p>

        </div>


<a
        href="create.html"
        class="btn btn-primary">

        <i class="bi bi-plus-lg"></i>
        Novo animal

        </a>

    </div>


    <!-- =====================================================
         MENSAGEM FLASH DE EXEMPLO
    ====================================================== -->
    <div class="alert alert-success alert-dismissible fade show">

        Animal registado com sucesso.

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>


    <div class="card shadow-sm">

        <div class="card-body">

            <!-- =================================================
                 PESQUISA / FILTROS
            ================================================== -->
            <form class="row g-3 mb-4">

                <div class="col-md-6">

                    <input
                        type="search"
                        class="form-control"
                        placeholder="Pesquisar animal..."
                    >

                </div>


                <div class="col-md-3">

                    <select class="form-select">

                        <option>
                            Todas as espécies
                        </option>

                        <option>
                            Cão
                        </option>

                        <option>
                            Gato
                        </option>
