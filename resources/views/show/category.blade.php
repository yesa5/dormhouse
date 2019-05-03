@extends('layouts.app')

@section('content')

<div class="container">
    @if (isset($category))
        <h3>All the discussions related to <span style="color: blue">{{ $category->category_name}}</span> category</h3>        
        @if (isset($count[0]))
        <h3>Counts: {{$count[0]->count}}</h3>            
        @endif
    @endif
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
                        </div>
                    </div>
                    <br>
                @endforeach
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection
