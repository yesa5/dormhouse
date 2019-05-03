@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>{{$discussions->discussion_title}}</h1>
            <h5>
                {{$discussions->discussion_description}}
            </h5>
        </div>
        <div class="col-md-4">
        <a href="{{$discussions->id}}/add/vote" class="btn btn-primary">+</a>
                {{sizeof($votesLike) - sizeof($votesDislike)}}
        <a href="{{$discussions->id}}/delete/vote" class="btn btn-primary">-</a>
        </div>
    </div>
    <br>
    @foreach ($comments as $item) 
        <div class="card w-100">
            <div class="card-body">
                @foreach ($users as $user)
                    @if ($user->id == $item->comment_user_id)
                        <h5 class="card-title">{{$user->name}}</h5>                        
                    @endif
                @endforeach
                <p class="card-text">{{$item->comment_description}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">{{$item->updated_at}}</small>
            </div>
        </div>
        <br>
    @endforeach
    

    <form method="POST" action="add/comment">
            @csrf
            <div class="form-group">
                <textarea name="description" rows="5" cols="136" placeholder="Comment"></textarea>
            </div>
            <input type="hidden" name="discussion_id" value="{{$discussions->id}}">
            <input type="submit" class="btn btn-xs btn-primary" value="Write comment">
        </form>
</div>
@endsection