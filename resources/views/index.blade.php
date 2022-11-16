@extends('cfg')
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner container">
            <div class="carousel-item container">
                <img class="first-slide w-100" src="{{asset('images/chel1.jpg')}}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Прояви себя!</h1>
                        <p>У вас есть прекрасная возможность показать себя</p>
                        <img src="storage/app/chel1.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="carousel-item active container">
                <img class="second-slide w-100" src="{{asset('images/chel2.jpg')}}" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Выбирай нас!</h1>
                        <p>Удобный интерфейс</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item container">
                <img class="third-slide w-100" src="{{asset('images/chel3.jpg')}}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>GalleyWorks.com</h1>
                        <p>Всё только начинается</p>
                        <p><a class="btn btn-lg btn-primary" href="{{route('form')}}" role="button">Заяви о себе</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev w-50" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next w-50" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">


        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Каталоги</h1>
            <p class="lead font-weight-normal">Все работы авторов расположенны на одной странице</p>
            <a class="btn btn-outline-secondary" href="{{route('catalog')}}">Смотри здесь!</a>

        </div>
        <img src="{{asset('images/reward.png')}}" width="100px" height="100px" alt="">
    </div>
    <section class="jumbotron text-center bg-white">
        <div class="container align-content-center">
            <img src="{{asset('images/logos.png')}}" alt="">
        </div>
    </section>


@endsection
