<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@section('sidebar')
@show
<ul class="nav">
    <li><a href="{{route('index')}}">Главная</a></li>
    <li><a href="{{route('catalog')}}">Каталог</a></li>
    <li><a href="{{route('form')}}">Заявка</a></li>
    <li><a href="{{route('about')}}">О нас</a></li>
</ul>
@yield('content')
</body>
</html>
