@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Ask anything you want :)</h3>
    <form method="POST" action="{{ route('discussions.store') }}">
        @csrf
        <div class="form-group">
          <input type="text" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <textarea name="description" rows="10" cols="30" placeholder="Description"></textarea>
        </div>
        <div class="form-group">
            <select name="category_id" class="custom-select">
              <option selected>Choose Category</option>
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>                  
              @endforeach
            </select>
        </div>     
        <div class="form-group">
            <select name="tag_id" class="custom-select">
              <option selected>Choose Tag</option>
              @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->tag_name}}</option>                  
              @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-xs btn-danger" value="Add">

    </form>
</div>
@endsection