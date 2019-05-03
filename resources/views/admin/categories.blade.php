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
    @for($i = 1; $i <= sizeof($categories); $i++)
        <tr>
            <th scope="row">{{ $categories[$i - 1]->id }}</th>
            <td>{{ $categories[$i - 1]->category_name }}</td>
            <td>
              <a class="p-3" href="{{ route('categories.edit', $categories[$i - 1]->id) }}">Edit</a>
              <form action="{{ route('categories.destroy', $categories[$i - 1]->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" class="btn btn-link" value="Delete">
              </form>
            </td>
        </tr>
    @endfor
    
</table>
<a href="{{ route('categories.create')}}" class="btn btn-primary btn-lg active " role="button" aria-pressed="true">Add categories</a>
</div>
@endsection
