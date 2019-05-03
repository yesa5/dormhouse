@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="form-group">
          <input type="text" name="name" placeholder="Category name">
        </div>

        <input type="submit" class="btn btn-xs btn-danger" value="Add">
    </form>
</div>
@endsection