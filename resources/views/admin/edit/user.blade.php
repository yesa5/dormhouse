@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('user.update', $user->id) }}">
        @csrf
        <div class="form-group">
        <input type="hidden" name="_method" value="PUT">
        </div>
        <div class="form-group">
        <input type="text" name="name" value="{{$user ->name}}">
        </div>
        <div class="form-group">
        <input type="text" name="email" value="{{$user ->email}}">
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-xs btn-danger" value="Update">
        </div>
        
    </form>
</div>
@endsection
