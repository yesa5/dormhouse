@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Description</th>
      <th scope="col">Author</th>
      <th scope="col">Discussion</th>
      <th scope="col">Handle</th>

    </tr>
  </thead>
  <tbody>
    @for($i = 1; $i <= sizeof($comments); $i++)
        <tr>
            <th scope="row">{{ $comments[$i - 1]->id }}</th>
            <td>{{ $comments[$i - 1]->comment_description }}</td>
            <td>{{ $comments[$i - 1]->comment_user_id }}</td>
            <td>{{ $comments[$i - 1]->comment_discussion_id }}</td>

            <td>
              <a class="p-3" href="{{ route('comments.edit', $comments[$i - 1]->id) }}">Edit</a>
              <form action="{{ route('comments.destroy', $comments[$i - 1]->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" class="btn btn-link" value="Delete">
              </form>
            </td>
        </tr>
    @endfor
    
</table>
<a href="{{ route('comments.create')}}" class="btn btn-primary btn-lg active " role="button" aria-pressed="true">Add comments</a>
</div>
@endsection
