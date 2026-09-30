@extends('layout.main')

@section('title', 'Editar Consulta - VetCare')

@section('content')

    <div class="mb-4">
        <h1 class="h2">Editar consulta</h1>
        <p class="text-muted">Consulta de {{ $appointment->pet->name }} — {{ $appointment->date->format('d/m/Y') }}</p>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">

            <!-- FORMULÁRIO -->
            <form method="POST" action="{{ route('appointments.update', $appointment) }}">
                @csrf
                @method('PUT')

                <div class="row">

                    <!-- Animal -->
                    <div class="col-md-6 mb-3">
                        <label for="pet_id" class="form-label">Animal</label>
                        <select name="pet_id" id="pet_id" class="form-select @error('pet_id') is-invalid @enderror">
                            @foreach ($pets as $pet)
                                <option value="{{ $pet->id }}" @selected(old('pet_id', $appointment->pet_id) == $pet->id)>{{ $pet->name }}</option>
                            @endforeach
                        </select>
                        @error('pet_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Veterinário -->
                    <div class="col-md-6 mb-3">
                        <label for="veterinarian_id" class="form-label">Veterinário</label>
                        <select name="veterinarian_id" id="veterinarian_id" class="form-select @error('veterinarian_id') is-invalid @enderror">
                            @foreach ($veterinarians as $veterinarian)
                                <option value="{{ $veterinarian->id }}" @selected(old('veterinarian_id', $appointment->veterinarian_id) == $veterinarian->id)>{{ $veterinarian->name }}</option>
                            @endforeach
                        </select>
                        @error('veterinarian_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="row">

                    <!-- Data -->
                    <div class="col-md-6 mb-3">
                        <label for="date" class="form-label">Data</label>
                        <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $appointment->date->format('Y-m-d')) }}">
                        @error('date')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Estado -->
                    <div class="col-md-6 mb-3">
                        <label for="status" class="form-label">Estado</label>
                        <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                            <option value="agendada" @selected(old('status', $appointment->status) == 'agendada')>Agendada</option>
                            <option value="realizada" @selected(old('status', $appointment->status) == 'realizada')>Realizada</option>
                            <option value="cancelada" @selected(old('status', $appointment->status) == 'cancelada')>Cancelada</option>
                        </select>
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <!-- Serviços (relação N:N) -->
                <div class="mb-4">
                    <label class="form-label">Serviços</label>

                    <div class="border rounded p-3">
                        @foreach ($services as $service)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="services[]" value="{{ $service->id }}" id="service{{ $service->id }}" @checked(collect(old('services', $appointment->services->pluck('id')))->contains($service->id))>
                                <label class="form-check-label" for="service{{ $service->id }}">
                                    {{ $service->name }} — {{ number_format($service->price, 2, ',', '.') }} €
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>


                <!-- Botões -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg"></i>
                        Guardar alterações
                    </button>
                    <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

@endsection
