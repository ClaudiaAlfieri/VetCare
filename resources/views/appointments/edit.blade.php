<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar Consulta - VetCare</title>

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

            <a class="nav-link active" href="../appointments/index.html">
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

    <div class="mb-4">

        <h1 class="h2">
            Editar consulta
        </h1>

        <p class="text-muted">
            Consulta de Max — 12/09/2026
        </p>

    </div>


    <div class="card shadow-sm">

        <div class="card-body">

            <!-- =================================================
                 FORMULÁRIO
            ================================================== -->
            <form>

                <div class="row">

                    <!-- Animal -->
                    <div class="col-md-6 mb-3">

                        <label for="pet" class="form-label">
                            Animal
                        </label>

                        <select id="pet" class="form-select">

                            <option selected>
                                Max
                            </option>

                            <option>
                                Luna
                            </option>

                            <option>
                                Tobias
                            </option>

                        </select>

                    </div>


                    <!-- Veterinário -->
                    <div class="col-md-6 mb-3">

                        <label for="veterinarian" class="form-label">
                            Veterinário
                        </label>

                        <select id="veterinarian" class="form-select">

                            <option selected>
                                Dr. João Almeida
                            </option>

                            <option>
                                Dra. Marta Sousa
                            </option>

                            <option>
                                Dr. Pedro Nogueira
                            </option>

                        </select>

                    </div>

                </div>


                <div class="row">

                    <!-- Data -->
                    <div class="col-md-6 mb-3">

                        <label for="date" class="form-label">
                            Data
                        </label>

                        <input
                            type="date"
                            id="date"
                            class="form-control"
                            value="2026-09-12"
                        >

                    </div>


                    <!-- Estado -->
                    <div class="col-md-6 mb-3">

                        <label for="status" class="form-label">
                            Estado
                        </label>

                        <select id="status" class="form-select">

                            <option>
                                Agendada
                            </option>

                            <option selected>
                                Realizada
                            </option>

                            <option>
                                Cancelada
                            </option>

                        </select>

                    </div>

                </div>


                <!-- Serviços (relação N:N) -->
                <div class="mb-4">

                    <label class="form-label">
                        Serviços
                    </label>

                    <div class="border rounded p-3">

                        <div class="form-check">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="service1"
                                checked
                            >

                            <label class="form-check-label" for="service1">
                                Consulta de rotina — 25,00 €
                            </label>

                        </div>


                        <div class="form-check">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="service2"
                            >

                            <label class="form-check-label" for="service2">
                                Vacinação — 18,50 €
                            </label>

                        </div>


                        <div class="form-check">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="service3"
                            >

                            <label class="form-check-label" for="service3">
                                Cirurgia de esterilização — 120,00 €
                            </label>

                        </div>

                    </div>

                </div>


                <!-- Botões -->
                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Guardar alterações
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
