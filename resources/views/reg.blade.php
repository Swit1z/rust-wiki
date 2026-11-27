<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="style/log.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @include('layouts.header')
    <div class="auth">
        <h2>регистрация</h2>
        <form class="forms">
            <input type="tex" class="" placeholder="логин">
            <input type="password" class="" placeholder="пароль">
            <button>зарегистрироваться</button>
            <a href="log.html">авторизироваться</a>
        </form>
    </div>
    @include('layouts.footer')
</body>
</html>