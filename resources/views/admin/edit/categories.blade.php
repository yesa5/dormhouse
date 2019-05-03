@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('categories.update', $categories->id) }}">
        @csrf
        <div class="form-group">
        <input type="hidden" name="_method" value="PUT">
        </div>
        <div class="form-group">
        <input type="text" name="category_name" value="{{$categories->category_name}}">
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-xs btn-danger" value="Update">
        </div>
    </form>
</div>
@endsection