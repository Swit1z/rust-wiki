<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<footer>
        <nav class="footerl">
            <a href="about.html">О нас</a>
            <a href="mech.html">Механика</a>
            <a href="building.html">Строительства</a>
            <a href="news.html">обновление</a>
            @auth
        {{-- Пользователь авторизован --}}
                <span class="user-name">Привет, {{ Auth::user()->name }}!</span>
        
        @if(Auth::user()->role === 'admin')
            <a href="{{ route('admin.dashboard') }}">Админка</a>
        @endif
        
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn-logout">Выйти</button>
        </form>
    @else
        {{-- Пользователь не авторизован --}}
        <a href="{{ route('login') }}">Войти</a>
        <a href="{{ route('register') }}">Регистрация</a>
        @endauth  
        </nav>
        <div class="copyright">
            <p>© COPYRIGHT 2026. Все права защищены</p>
        </div>
</footer>