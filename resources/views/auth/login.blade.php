@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<section class="auth-card">
    <h1>Login</h1>

    @if ($errors->any())
        <div class="auth-errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="auth-field">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="auth-field">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <label class="auth-remember">
            <input type="checkbox" name="remember"> Lembrar-me
        </label>

        <button type="submit" class="auth-button">Entrar</button>
    </form>

    <p class="auth-switch">
        Ainda não tens conta? <a href="{{ route('register') }}">Registar</a>
    </p>
</section>
@endsection
