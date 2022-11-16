<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('images/logosite.png')}}" type="image/x-icon">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link rel="stylesheet" href={{ asset('css/carousel.css') }}>
    <title>GalleryWorks</title>
</head>
<body>
@section('sidebar')
@show
<nav class="site-header sticky-top py-1 bg-dark">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <a class="py-2" href="#">
            <img src="{{asset('images/logo.png')}}" alt="logo" width="104" height="44">
        </a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('index')}}">Главная</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('catalog')}}">Каталог</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('form')}}">Заявка</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('about')}}">О нас</a>
    </div>
</nav>
@yield('content')


<footer class="container py-5">
    <div class="row">
        <div class="col-12 col-md">
            <img src="https://logojinni.com/image/logos/squarespace.svg" alt="logo" width="24" height="24">

        </div>
        <div class="col-6 col-md">
            <h5>Навигация</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="{{route('index')}}">Главная</a></li>
                <li><a class="text-muted" href="{{route('catalog')}}">Каталог</a></li>
                <li><a class="text-muted" href="{{route('form')}}">Заявка</a></li>
                <li><a class="text-muted" href="{{route('about')}}">О нас</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Источники</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="https://ok.ru/">Одноклассники</a></li>
                <li><a class="text-muted" href="https://vk.com/">Вконтакте</a></li>
                <li><a class="text-muted" href="https://youtube.com/">YouTube</a></li>
                <li><a class="text-muted" href="https://t.me/ryabkin">Telegram</a></li>
            </ul>
        </div>
    </div>
</footer>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.slim.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
