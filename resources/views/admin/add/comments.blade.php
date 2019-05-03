@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('comments.store') }}">
        @csrf
        <div class="form-group">
          <input type="textarea" name="description" placeholder="Comment Description">
        </div>
        <div class="form-group">
          <input type="number" name="user_id" placeholder="user id">
        </div>
        <div class="form-group">
          <input type="number" name="discussion_id" placeholder="discussion_id">
        </div>
        <div class="form-group">
          <input type="number" name="parent_id" placeholder="parent_id">  
        </div>      
        <input type="submit" class="btn btn-xs btn-danger" value="Add">
    </form>
</div>
@endsection