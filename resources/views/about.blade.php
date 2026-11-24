@extends('layouts.app')

@section('title', 'О нас - Rust Wiki')

{{-- Подключаем специфичный стиль только для этой страницы --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
    <div class="wiki">           
        <h2>Добро пожаловать на Rust Wiki!</h2>      
    </div>
    <div class="about">
        <div class="RustBack">
            <p>Rust — это игра на выживание, созданная студией Facepunch. Вдохновлён такими играми, как Minecraft...</p>
            <h2>О компании</h2>
            <div class="about-line"></div>
        </div>
        {{-- Исправлена опечатка оригинала: было <divc>, стало <div> --}}
        <div class="text">
            <h2>Facepunch Studios Ltd является британским независимым разработчиком...</h2>
            <div class="line"></div>
            <p>Более подробную информацию можно узнать на официальном сайте <a href="https://facepunch.com/">facepunch</a></p>
        </div>
    </div>
@endsection