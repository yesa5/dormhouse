@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @for($i = 1; $i <= sizeof($tags); $i++)
        <tr>
            <th scope="row">{{ $tags[$i - 1]->id }}</th>
            <td>{{ $tags[$i - 1]->tag_name }}</td>
            <td>
              <a class="p-3" href="{{ route('tags.edit', $tags[$i - 1]->id) }}">Edit</a>
              <form action="{{ route('tags.destroy', $tags[$i - 1]->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" class="btn btn-link" value="Delete">
              </form>
            </td>
        </tr>
    @endfor
    
</table>
<a href="{{ route('tags.create')}}" class="btn btn-primary btn-lg active " role="button" aria-pressed="true">Add tags</a>
</div>
@endsection
