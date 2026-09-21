<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Novo Serviço - VetCare</title>

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

            <a class="nav-link" href="../veterinarians/index.html">
                Veterinários
            </a>

            <a class="nav-link active" href="../services/index.html">
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

    <div class="mb-4">

        <h1 class="h2">
            Novo serviço
        </h1>

        <p class="text-muted">
            Preencha os dados do novo serviço.
        </p>

    </div>


    <div class="card shadow-sm">

        <div class="card-body">

            <!-- =================================================
                 FORMULÁRIO
            ================================================== -->
            <form>

                <!-- Nome -->
                <div class="mb-3">

                    <label for="name" class="form-label">
                        Nome
                    </label>

                    <input
                        type="text"
                        id="name"
                        class="form-control is-invalid"
                    >

                    <!-- Exemplo de mensagem de validação -->
                    <div class="invalid-feedback">
                        O nome do serviço é obrigatório.
                    </div>

                </div>


                <!-- Descrição -->
                <div class="mb-3">

                    <label for="description" class="form-label">
                        Descrição
                    </label>

                    <textarea
                        id="description"
                        class="form-control"
                        rows="3"></textarea>

                </div>


                <!-- Preço -->
                <div class="mb-4">

                    <label for="price" class="form-label">
                        Preço (€)
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        id="price"
                        class="form-control"
                    >

                </div>


                <!-- Botões -->
                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Registar serviço
                    </button>

                    <a href="index.html" class="btn btn-secondary">
                        Cancelar
                    </a>

                </div>

            </form>

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
