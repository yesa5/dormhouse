@extends('layouts.app')

@section('content')
<div class="container">
        Results of search
        <div class="row">
            <div class="col-md-12">
                {{-- <div class="card-columns"> --}}
                    @foreach ($discussions as $item)
                    
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
                    @endforeach
                {{-- </div> --}}
            </div>
        </div>
    </div>    
</div>
@endsection
