@extends('layout.main')

@section('title', 'Nova Consulta - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Nova consulta</h1>
        <p class="text-muted">Preencha os dados da nova consulta.</p>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FORMULÁRIO -->
            <form>

                <div class="row">

                    <!-- Animal -->
                    <div class="col-md-6 mb-3">
                        <label for="pet" class="form-label">Animal</label>
                        <select id="pet" class="form-select is-invalid">
                            <option value="">Selecione...</option>
                            <option>Max</option>
                            <option>Luna</option>
                            <option>Tobias</option>
                        </select>

                        <!-- Exemplo de mensagem de validação -->
                        <div class="invalid-feedback">
                            O animal é obrigatório.
                        </div>
                    </div>

                    <!-- Veterinário -->
                    <div class="col-md-6 mb-3">
                        <label for="veterinarian" class="form-label">Veterinário</label>
                        <select id="veterinarian" class="form-select">
                            <option value="">Selecione...</option>
                            <option>Dr. João Almeida</option>
                            <option>Dra. Marta Sousa</option>
                            <option>Dr. Pedro Nogueira</option>
                        </select>
                    </div>

                </div>


                <div class="row">

                    <!-- Data -->
                    <div class="col-md-6 mb-3">
                        <label for="date" class="form-label">Data</label>
                        <input type="date" id="date" class="form-control">
                    </div>

                    <!-- Estado -->
                    <div class="col-md-6 mb-3">
                        <label for="status" class="form-label">Estado</label>
                        <select id="status" class="form-select">
                            <option>Agendada</option>
                            <option>Realizada</option>
                            <option>Cancelada</option>
                        </select>
                    </div>

                </div>


                <!-- Serviços (relação N:N) -->
                <div class="mb-4">
                    <label class="form-label">Serviços</label>

                    <div class="border rounded p-3">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="service1">
                            <label class="form-check-label" for="service1">
                                Consulta de rotina — 25,00 €
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="service2">
                            <label class="form-check-label" for="service2">
                                Vacinação — 18,50 €
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="service3">
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
                        Registar consulta
                    </button>
                    <a href="index.html" class="btn btn-secondary">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

@endsection
