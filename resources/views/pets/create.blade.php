@extends('layout.main')

@section('title', 'Novo Animal - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Novo animal</h1>
        <p class="text-muted">Preencha os dados do novo animal.</p>
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
                        O nome do animal é obrigatório.
                    </div>
                </div>


                <div class="row">

                    <!-- Tutor -->
                    <div class="col-md-6 mb-3">
                        <label for="owner" class="form-label">Tutor</label>
                        <select id="owner" class="form-select">
                            <option value="">Selecione...</option>
                            <option>Ana Silva</option>
                            <option>João Santos</option>
                            <option>Maria Costa</option>
                        </select>
                    </div>

                    <!-- Espécie -->
                    <div class="col-md-6 mb-3">
                        <label for="species" class="form-label">Espécie</label>
                        <select id="species" class="form-select">
                            <option value="">Selecione...</option>
                            <option>Cão</option>
                            <option>Gato</option>
                            <option>Coelho</option>
                        </select>
                    </div>

                </div>


                <div class="row">

                    <!-- Data de nascimento -->
                    <div class="col-md-6 mb-3">
                        <label for="birthDate" class="form-label">Data de nascimento</label>
                        <input type="date" id="birthDate" class="form-control">
                    </div>

                    <!-- Peso -->
                    <div class="col-md-6 mb-3">
                        <label for="weight" class="form-label">Peso (kg)</label>
                        <input type="number" step="0.01" min="0" id="weight" class="form-control">
                    </div>

                </div>


                <!-- Sexo -->
                <div class="mb-3">
                    <label for="sex" class="form-label">Sexo</label>
                    <select id="sex" class="form-select">
                        <option value="">Selecione...</option>
                        <option>Macho</option>
                        <option>Fêmea</option>
                    </select>
                </div>


                <!-- Observações -->
                <div class="mb-3">
                    <label for="description" class="form-label">Observações</label>
                    <textarea id="description" class="form-control" rows="4"></textarea>
                </div>


                <!-- Estado -->
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="active" checked>
                    <label class="form-check-label" for="active">Animal ativo</label>
                </div>


                <!-- Botões -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Registar animal
                    </button>
                    <a href="{{ url('/pets') }}" class="btn btn-secondary">
                        Cancelar
                    </a>
                </div>

            </form>

        </div>
    </div>

@endsection
