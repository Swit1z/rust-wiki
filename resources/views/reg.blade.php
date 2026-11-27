<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="{{ asset('style/log.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Rust Wiki</title>
</head>
<body>
@include('layouts.header')

<div class="auth">
    <h2>Регистрация</h2>

    {{-- Вывод общих ошибок валидации --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Вывод успешного сообщения --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form class="forms" action="{{ route('register') }}" method="POST">
        @csrf

        <input 
            type="text" 
            name="name" 
            placeholder="Логин" 
            value="{{ old('name') }}" 
            required
        >

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

        <input 
            type="password" 
            name="password_confirmation" 
            placeholder="Повторите пароль" 
            required
        >

        <button type="submit">Зарегистрироваться</button>

        <a href="{{ route('login') }}">Уже есть аккаунт? Войти</a>
    </form>
</div>

@include('layouts.footer')
</body>
</html>