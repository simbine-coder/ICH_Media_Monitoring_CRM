@extends('layouts.auth')

@section('title', 'Registo')

@section('content')
<section class="auth-card">
    <h1>Criar Conta</h1>

    @if ($errors->any())
        <div class="auth-errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="auth-field">
            <label for="name">Nome</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" autocomplete="name" required>
        </div>

        <div class="auth-field">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" required>
        </div>

        <div class="auth-field">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" autocomplete="new-password" required>
        </div>

        <div class="auth-field">
            <label for="password_confirmation">Confirmar Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" autocomplete="new-password" required>
        </div>

        <button type="submit" class="auth-button register-button">Registar</button>
    </form>

    <p class="auth-switch">
        Já tens conta? <a href="{{ route('login') }}">Login</a>
    </p>
</section>
@endsection
