<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Serviços - VetCare</title>

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
                    <a class="nav-link" href="../pets/index.html">
                        Animais
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Consultas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../veterinarians/index.html">
                        Veterinários
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="index.html">
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
                        <a class="dropdown-item" href="../login.html">
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
                Serviços
            </h1>

            <p class="text-muted mb-0">
                Gestão dos serviços prestados pela clínica.
            </p>

        </div>

        <a href="create.html" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Novo serviço
        </a>

    </div>


    <!-- =====================================================
         MENSAGEM FLASH DE EXEMPLO
    ====================================================== -->
    <div class="alert alert-success alert-dismissible fade show">

        Serviço registado com sucesso.

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

                <div class="col-md-9">

                    <input
                        type="search"
                        class="form-control"
                        placeholder="Pesquisar serviço..."
                    >

                </div>


                <div class="col-md-3">

                    <button
                        type="submit"
                        class="btn btn-outline-primary w-100">

                        <i class="bi bi-search"></i>
                        Pesquisar

                    </button>

                </div>

            </form>


            <!-- =================================================
                 LISTAGEM
            ================================================== -->
            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>

                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th class="text-end">
                            Ações
                        </th>
                    </tr>

                    </thead>


                    <tbody>

                    <tr>

                        <td>1</td>

                        <td>
                            <strong>
                                Consulta de rotina
                            </strong>
                        </td>

                        <td>
                            Avaliação geral de saúde do animal
                        </td>

                        <td>
                            25,00 €
                        </td>

                        <td class="text-end">

                            <a href="show.html" class="btn btn-sm btn-outline-secondary" title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>

                            <a href="edit.html" class="btn btn-sm btn-outline-primary" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <button
                                type="button"
                                class="btn btn-sm btn-outline-danger"
                                data-bs-toggle="modal"
                                data-bs-target="#deleteModal"
                                title="Eliminar">

                                <i class="bi bi-trash"></i>

                            </button>

                        </td>

                    </tr>


                    <tr>

                        <td>2</td>

                        <td>
                            <strong>
                                Vacinação
                            </strong>
                        </td>

                        <td>
                            Administração de vacina de rotina
                        </td>

                        <td>
                            18,50 €
                        </td>

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

                        <td>
                            <strong>
                                Cirurgia de esterilização
                            </strong>
                        </td>

                        <td>
                            Procedimento cirúrgico de esterilização
                        </td>

                        <td>
                            120,00 €
                        </td>

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


            <!-- =================================================
                 PAGINAÇÃO
            ================================================== -->
            <nav>

                <ul class="pagination justify-content-center mb-0">

                    <li class="page-item disabled">

                        <a class="page-link" href="#">
                            Anterior
                        </a>

                    </li>

                    <li class="page-item active">

                        <a class="page-link" href="#">
                            1
                        </a>

                    </li>

                    <li class="page-item">

                        <a class="page-link" href="#">
                            2
                        </a>

                    </li>

                    <li class="page-item">

                        <a class="page-link" href="#">
                            Seguinte
                        </a>

                    </li>

                </ul>

            </nav>

        </div>

    </div>

</main>


<!-- =========================================================
     MODAL DE CONFIRMAÇÃO DE ELIMINAÇÃO
========================================================= -->
<div
    class="modal fade"
    id="deleteModal"
    tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Eliminar serviço
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>

            </div>


            <div class="modal-body">

                Tem a certeza de que pretende eliminar
                <strong>Consulta de rotina</strong>?

            </div>


            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">

                    Cancelar

                </button>

                <button
                    type="button"
                    class="btn btn-danger">

                    Eliminar

                </button>

            </div>

        </div>

    </div>

</div>


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
