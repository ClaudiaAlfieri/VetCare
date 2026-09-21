@extends('layout.main')

@section('title', 'Editar Animal - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Editar animal</h1>
        <p class="text-muted">Max</p>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FORMULÁRIO -->
            <form>

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" id="name" class="form-control" value="Max">
                </div>


                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="owner" class="form-label">Tutor</label>
                        <select id="owner" class="form-select">
                            <option selected>Ana Silva</option>
                            <option>João Santos</option>
                            <option>Maria Costa</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="species" class="form-label">Espécie</label>
                        <select id="species" class="form-select">
                            <option selected>Cão</option>
                            <option>Gato</option>
                            <option>Coelho</option>
                        </select>
                    </div>

                </div>


                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="birthDate" class="form-label">Data de nascimento</label>
                        <input type="date" id="birthDate" class="form-control" value="2021-03-12">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="weight" class="form-label">Peso (kg)</label>
                        <input type="number" step="0.01" id="weight" class="form-control" value="24.50">
                    </div>

                </div>


                <div class="mb-3">
                    <label for="sex" class="form-label">Sexo</label>
                    <select id="sex" class="form-select">
                        <option selected>Macho</option>
                        <option>Fêmea</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="description" class="form-label">Observações</label>
                    <textarea id="description" class="form-control" rows="4">Animal sociável. Sem alergias conhecidas.</textarea>
                </div>


                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="active" checked>
                    <label class="form-check-label" for="active">Animal ativo</label>
                </div>


                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Guardar alterações
                    </button>
                    <a href="{{ url('/pets') }}" class="btn btn-secondary">
                        Cancelar
                    </a>
                </div>

            </form>

        </div>
    </div>

@endsection
