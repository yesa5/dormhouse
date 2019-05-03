@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('discussions.update', $discussions->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
          <input type="text" name="title" placeholder="Title" value="{{$discussions->discussion_title}}">
        </div>
        <div class="form-group">
            <textarea name="description" rows="10" cols="30" placeholder="Description">{{$discussions->discussion_description}}</textarea>
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
        {{-- <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button> --}}
    </form>
</div>
@endsection