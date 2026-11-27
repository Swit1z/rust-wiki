<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="{{ asset('style/log.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход - Rust Wiki</title>
</head>
<body>
@include('layouts.header')

<div class="auth">
    <h2>Авторизация</h2>

    {{-- Вывод ошибок --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Вывод сообщения об ошибке входа --}}
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form class="forms" action="{{ route('login') }}" method="POST">
        @csrf

        <input 
            type="email" 
            name="email" 
            placeholder="Email" 
            value="{{ old('email') }}" 
            required
        >

        <input 
            type="password" 
            name="password" 
            placeholder="Пароль" 
            required
        >

        <button type="submit">Войти</button>

        <a href="{{ route('register') }}">Нет аккаунта? Зарегистрироваться</a>
    </form>
</div>

@include('layouts.footer')
</body>
</html>