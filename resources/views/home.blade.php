@extends('layouts.app')

@section('title', 'Главная - Rust Wiki')

@section('content')
    <div class="buy">           
        <h2>Исследуйте</h2>
        <h2>Стройте</h2>
        <h2>Выживайте</h2>
        <p>Единственная цель в Rust - выжить. Все хочет, чтобы вы умерли: дикая природа острова и другие обитатели, окружающая среда, другие выжившие. Делайте все возможное, чтобы продержаться еще одну ночь.</p>
        <a href="https://store.steampowered.com/app/252490/Rust/"><button class="buy-button">КУПИТЬ</button></a>   
    </div>
    <div class="Rust">
        <div class="RustBack">
            <p>Rust — это многопользовательская компьютерная игра, в которой игроки сражаются друг с другом в суровом открытом мире...</p>
        </div>
    </div>
    <div class="pcgame">
        <h2>“Rust - одна из самых жестоких игр в Steam, и именно это делает ее такой привлекательной”.</h2>
        <div class="line"></div>
        <p>PC GAMER</p>
    </div>
    <div class="twitch">
        <h1>Twitch Drops</h1>
        <p>Twitch Drops подарки от ваших любимых стримеров. Будьте бдительны в отношении мошенников.</p>
        <a href="https://twitch.facepunch.com/"><button class="twitch-button">ЗАБРАТЬ</button></a>
    </div>
    <div class="email">
        <p>связь с нами</p>
        <form class="email-form" id="emailForm">
            <input type="email" class="email-input" placeholder="Введите ваш Email" required>
            <button type="submit" class="submit-btn"><span>→</span></button>
        </form>
    </div>
@endsection