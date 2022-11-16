@extends('cfg')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div class="row justify-content-center align-items-center">
    <form name="form" id="form" method="post" action="" enctype="multipart/form-data" class="col-md-3 order-md-1">
@csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Заголовок</label>
            <input type="text" id="title_form" name="title_form" class="form-control"  required="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ваше имя</label>
            <input type="text" id="name_form" name="name_form" class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Почтовый адрес</label>
            <input type="text" id="mail_form" name="mail_form" class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Содержимое текста</label>
            <textarea name="text_form" class="form-control" required=""></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ссылка на сайт</label>
            <input type="text" id="link_form" name="link_form" class="form-control" required="">
        </div>
        <input type='submit' id="btn">
    </form>
    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js"></script>
    <script src="{{ asset('js/form.js') }}"></script>
@endsection
