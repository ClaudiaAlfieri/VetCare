@extends('layout.main')

@section('title', 'Editar Veterinário - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Editar veterinário</h1>
        <p class="text-muted">Dr. João Almeida</p>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FORMULÁRIO -->
            <form>

                <!-- Nome -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" id="name" class="form-control" value="Dr. João Almeida">
                </div>


                <div class="row">

                    <!-- Especialidade -->
                    <div class="col-md-6 mb-3">
                        <label for="specialty" class="form-label">Especialidade</label>
                        <select id="specialty" class="form-select">
                            <option selected>Clínica Geral</option>
                            <option>Cirurgia</option>
                            <option>Dermatologia</option>
                        </select>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" value="joao.almeida@vetcare.pt">
                    </div>

                </div>


                <!-- Telefone -->
                <div class="mb-4">
                    <label for="phone" class="form-label">Telefone</label>
                    <input type="tel" id="phone" class="form-control" value="912 345 678">
                </div>


                <!-- Botões -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Guardar alterações
                    </button>
                    <a href="index.html" class="btn btn-secondary">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

@endsection
