@extends('cfg')
@section('content')

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="btn-group dropleft">
                    @foreach($design as $des)
                        <li class="dropdown-item">
                            <a href="{{route('category', $des->id)}}">{{$des->category_design}}</a>
                        </li>
                    @endforeach
                        <li class="dropdown-item">
                            <a href="{{route('catalog')}}">Все</a>
                        </li>
                    <div class="dropdown-menu">
                        <!-- Dropdown menu links -->
                    </div>
                </div>

                <div class="row">

                    @foreach($catalog as $cat)
                    <div class="col-md-4">

                        <div class="card mb-4 shadow-sm">

                            <img src="{{$cat->picture_catalog}}" width="auto" height="300px" alt="">
                            <div class="card-body">
                                <p class="card-text">{{$cat->title_catalog}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{$cat->link_catalog}}">Перейти</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
