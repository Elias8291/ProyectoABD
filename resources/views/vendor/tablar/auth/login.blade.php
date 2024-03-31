@extends('tablar::auth.layout')

@section('title', 'Iniciar sesión')

@section('content')
<style>
    /* Personalizando el fondo y los colores con una paleta educativa */
    body, html {
        margin: 0;
        padding: 0;
        /* Añadir un fondo sutil */
        background: url('https://example.com/path-to-your-background-image.jpg') no-repeat center center fixed;
        background-size: cover;
    }

    .card-md {
        background-color: rgba(255, 255, 255, 0.8); /* Semi-transparente para que se note el fondo */
        border-radius: 10px; /* Bordes redondeados para un aspecto más suave */
        box-shadow: 0 4px 6px rgba(0,0,0,0.1); /* Sombra sutil para mejorar la legibilidad */
        transition: transform 0.3s ease-in-out;
    }

    .btn-primary {
        background-color: #4caf50; /* Un verde más suave */
        border-color: #4caf50;
    }

    .btn-primary:hover {
        background-color: #43a047;
        border-color: #43a047;
        transform: scale(1.05); /* Efecto de hover con transformación */
    }

    .form-control:focus {
        border-color: #66afe9;
        box-shadow: 0 0 0 0.2rem rgba(100, 149, 237, .25);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .container-tight {
        animation: fadeIn 1s ease-in-out;
    }
</style>

<div class="container container-tight py-4">
    <div class="text-center mb-1 mt-5">
        
    </div>
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Inicia sesión en tu cuenta</h2>
            <form action="{{ route('login') }}" method="post" autocomplete="off" novalidate>
                @csrf
                <div class="mb-3">
                    <label class="form-label">Dirección de correo electrónico</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           placeholder="correo@mail.com" autocomplete="off">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Contraseña
                        <span class="form-label-description">
                            <a href="{{ route('password.request') }}">He olvidado mi contraseña</a>
                        </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Tu contraseña" autocomplete="off">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label">Recuérdame en este dispositivo</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center text-muted mt-3">
        ¿No tienes cuenta aún? <a href="{{ route('register') }}" tabindex="-1">Regístrate</a>
    </div>
</div>
@endsection
