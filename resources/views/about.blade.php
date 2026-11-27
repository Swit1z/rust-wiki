<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас - Rust Wiki</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/nav.css">
</head>
<body> 
    @include('layouts.header')

    <main>
        <div class="wiki">           
            <h2>Добро пожаловать на Rust Wiki!</h2>      
        </div>

        <div class="about">
            <h2>О компании</h2>
            <div class="line"></div>
            <p>
                Rust — это игра на выживание, созданная студией Facepunch. Вдохновлена такими играми, как Minecraft, и другими проектами о выживании в дикой природе. Rust стремится создать враждебную среду, в которой может развиваться уникальный геймплей.
            </p>
        <div class="text">
            <h2>Facepunch Studios</h2>
            <div class="line"></div>
            <p>
                Facepunch Studios Ltd является британским независимым разработчиком и издателем видеоигр, базирующимся в Бирмингеме, Англия. Компания была основана в июне 2004 года Гарри Ньюманом и за более чем двадцать лет существования стала одной из самых влиятельных инди-студий в индустрии.
                Наибольшую известность студии принесла песочница Garry's Mod, выпущенная в 2006 году. Другим ключевым проектом является многопользовательский выживач Rust, полный релиз которого состоялся в 2018 году и который остается одной из самых популярных игр в Steam.
            </p>
            <div class="line"></div>
            <p>
                Более подробную информацию можно узнать на официальном сайте: 
                <a href="https://facepunch.com/" target="_blank" style="color: #b91c1c; text-decoration: underline;">facepunch.com</a>
            </p>
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>
