<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 
    <header>
        <a href="{{ route('home') }}"><img  src="images/logo.webp" alt="rustlogo" class="logo"></a>
        <input type="search" class="headersearch" placeholder="Поиск..." >   
        <nav class="link">
            <a href="{{ route('about') }}">О нас</a>
            <a href="{{ route('mech') }}">Механика</a>
            <a href="{{ route('building') }}">Строительство</a>          
            <a href="{{ route('news') }}">Обновления</a>
        </nav>
    </header>
</body>