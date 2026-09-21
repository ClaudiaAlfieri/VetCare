@extends('layout.main')

@section('title', 'Login - VetCare')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-7 col-lg-5">

            <div class="card shadow-sm">

                <div class="card-body p-4">

                    <div class="text-center mb-4">

                        <i class="bi bi-heart-pulse fs-1 text-primary"></i>

                        <h1 class="h3 mt-2">
                            Login
                        </h1>

                        <p class="text-muted">
                            Aceda à sua conta VetCare.
                        </p>

                    </div>


                    <!-- Exemplo de mensagem de erro -->
                    <div class="alert alert-danger">
                        Email ou password inválidos.
                    </div>


                    <!-- Formulário de autenticação -->
                    <form>

                        <div class="mb-3">

                            <label for="email" class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                class="form-control is-invalid"
                                placeholder="nome@email.pt"
                            >

                            <div class="invalid-feedback">
                                Introduza um endereço de email válido.
                            </div>

                        </div>


                        <div class="mb-3">

                            <label for="password" class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                id="password"
                                class="form-control"
                            >

                        </div>


                        <div class="form-check mb-3">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="remember"
                            >

                            <label class="form-check-label" for="remember">
                                Manter sessão iniciada
                            </label>

                        </div>


                        <div class="d-grid">

                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Entrar
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
