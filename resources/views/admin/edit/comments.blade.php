@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('comments.update', $comments->id) }}">
        @csrf
        <div class="form-group">
        <input type="hidden" name="_method" value="PUT">
        </div>
        <div class="form-group">
        <input type="textarea" name="description" value="{{$comments->comment_description}}">
        </div>
        <div class="form-group">
        <input type="number" name="user_id" value="{{$comments->comment_user_id}}">
        </div>
        <div class="form-group">
        <input type="number" name="discussion_id" value="{{$comments->comment_discussion_id}}">
        </div>
        <div class="form-group">
        <input type="number" name="parent_id" value="{{$comments->comment_parent_id}}">        
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-xs btn-danger" value="Update">
        </div>
    </form>
</div>
@endsection