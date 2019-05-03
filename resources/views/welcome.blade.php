@extends('layouts.footers')
@section('content')

@endsection
@extends('layouts.menus')
@extends('layouts.headers')


{{--
 @section('content')

    <div class="container">

    <!--div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div-->

    <div class="container">
            <ul class="navbar-nav mr-auto dropdown" style="display: inline-block">
                <li class="nav-item" style="display: inline-block">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <!-- All categories -->
                        @foreach ($categories as $category)
                            <a class="dropdown-item" href="/category/{{ $category->id}}">{{$category->category_name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item" style="display: inline-block">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tags
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownButton">
                        <!-- All categories -->
                        @foreach ($tags as $tag)
                            <a class="dropdown-item" href="/tag/{{ $tag->id}}">{{$tag->tag_name}}</a>
                        @endforeach
                    </div>
                </li>
            </ul>


        </div> --}}
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card-group">
                    @foreach ($categories as $item)
                        <div class="card">
                            <div class="card-body">
                                <a href="/discussion/{{$item->id}}"><h5 class="card-title">{{$item->category_name}}</h5></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>         --}}
{{--
       <hr>
        <div class="row">
            <div class="col-md-12"> --}}
                {{-- <div class="card-columns"> --}}
{{--                    @foreach ($discussions as $item)

                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->discussion_title}}</h5>
                                <p class="card-text">{{$item->discussion_description}}</p>


                                <a href="/discussion/{{$item->id}}" class="btn btn-primary">Show More</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{$item->updated_at}}</small>
                                <small class="text-muted">Number of views: {{$item->discussion_views}}</small>
                            </div>
                        </div>
                        <br>
                    @endforeach --}}
                {{-- </div> --}}
{{--            </div>
        </div>
    </div>
 @endsection
--}}
