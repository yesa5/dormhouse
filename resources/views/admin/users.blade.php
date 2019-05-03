@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Email</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @for($i = 1; $i <= sizeof($users); $i++)
        <tr>
            <th scope="row">{{ $users[$i - 1]->id }}</th>
            <td>{{ $users[$i - 1]->name }}</td>
            <td>{{ $users[$i - 1]->email }}</td>
            <td>
              <a class="p-3" href="{{ route('user.edit', $users[$i - 1]->id) }}">Edit</a>
              <form action="{{ route('user.destroy', $users[$i - 1]->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" class="btn btn-link" value="Delete">
              </form>
            </td>
        </tr>
    @endfor
    
</table>
<a href="{{ route('user.create')}}" class="btn btn-primary btn-lg active " role="button" aria-pressed="true">Add User</a>
</div>
@endsection