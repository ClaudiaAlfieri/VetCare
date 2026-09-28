@extends('layout.main')

@section('title', 'Editar Serviço - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Editar serviço</h1>
        <p class="text-muted">Consulta de rotina</p>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FORMULÁRIO -->
            <form>

                <!-- Nome -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" id="name" class="form-control" value="Consulta de rotina">
                </div>


                <!-- Descrição -->
                <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea id="description" class="form-control" rows="3">Avaliação geral de saúde do animal</textarea>
                </div>


                <!-- Preço -->
                <div class="mb-4">
                    <label for="price" class="form-label">Preço (€)</label>
                    <input type="number" step="0.01" min="0" id="price" class="form-control" value="25.00">
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
