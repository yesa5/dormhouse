@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="form-group">
          <input type="text" name="name" placeholder="User name">
        </div>
        <div class="form-group">
          <input type="text" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Password">
        </div>

        <input type="submit" class="btn btn-xs btn-danger" value="Add">

    </form>
</div>
@endsection