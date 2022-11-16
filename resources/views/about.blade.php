@extends('cfg')
@section('content')


    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark text-center">
        <img class="rounded-circle" src="{{asset('images/sovesh.jpg')}}" alt="Generic placeholder image" width="140" height="140">
        <div class="col-md-0 px-0">
            <h1 class="display-4 font-italic align-content-center">Деловые люди</h1>
            <p class="lead my-3 text-center">Деловая среда</p>
        </div>
    </div>


    </div>
    <div class="container marketing">
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/vk.png')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>ВКонтакте</h2>
                <p>Следите за новостями во ВК</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/tg.png')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Telegram</h2>
                <p>Читайте нас в Telegram</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/yt.webp')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>YouTube</h2>
                <p>Смотрите наши курсы на нашем канале</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div>
@endsection
