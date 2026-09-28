@extends('layout.main')

@section('title', 'Novo Veterinário - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Novo veterinário</h1>
        <p class="text-muted">Preencha os dados do novo veterinário.</p>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FORMULÁRIO -->
            <form>

                <!-- Nome -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" id="name" class="form-control is-invalid">

                    <!-- Exemplo de mensagem de validação -->
                    <div class="invalid-feedback">
                        O nome do veterinário é obrigatório.
                    </div>
                </div>


                <div class="row">

                    <!-- Especialidade -->
                    <div class="col-md-6 mb-3">
                        <label for="specialty" class="form-label">Especialidade</label>
                        <select id="specialty" class="form-select">
                            <option value="">Selecione...</option>
                            <option>Clínica Geral</option>
                            <option>Cirurgia</option>
                            <option>Dermatologia</option>
                        </select>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control">
                    </div>

                </div>


                <!-- Telefone -->
                <div class="mb-4">
                    <label for="phone" class="form-label">Telefone</label>
                    <input type="tel" id="phone" class="form-control">
                </div>


                <!-- Botões -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Registar veterinário
                    </button>
                    <a href="index.html" class="btn btn-secondary">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

@endsection
