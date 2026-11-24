<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rust Wiki')</title>
    <!-- Подключение основного стиля по умолчанию -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Позволяет подключать дополнительные стили на конкретных страницах -->
    @yield('styles')
</head>
<body> 
    <header>
        <div class="container">
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.webp') }}" alt="rustlogo" class="logo"></a>    
            <nav>
                <a href="{{ route('about') }}">О нас</a>
                <a href="{{ route('mech') }}">Механика</a>
                <a href="{{ route('building') }}">Строительства</a>
                <a href="{{ route('biom') }}">Биомы</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="content">
            <div class="social-icons">
                <a href="https://vk.com/" target="_blank">
                    <img src="{{ asset('images/free-icon-vk-5968835.png') }}" alt="VK" class="footer-links">
                </a>
                <a href="https://facepunch.com/" target="_blank">
                    <img src="{{ asset('images/face.webp') }}" alt="Facepunch" class="footer-links">
                </a>
            </div>
            <div class="copyright">
                <!-- date('Y') автоматически подставит актуальный год (2026) -->
                <p>© COPYRIGHT {{ date('Y') }}. Все права защищены</p>
            </div>
        </div>
    </footer>
</body>
</html>