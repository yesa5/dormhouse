@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#  <a href="/admin/discussions/id/true">UP</a> <a href="/admin/discussions/id/false">Down</a></th>
      <th scope="col">Title  <a href="/admin/discussions/title/true">UP</a> <a href="/admin/discussions/title/false">Down</a></th>
      <th scope="col">Description  <a href="/admin/discussions/description/true">UP</a> <a href="/admin/discussions/description/false">Down</a></th>
      <th scope="col">Views  <a href="/admin/discussions/views/true">UP</a> <a href="/admin/discussions/views/false">Down</a></th>
      <th scope="col">Author  <a href="/admin/discussions/author/true">UP</a> <a href="/admin/discussions/author/false">Down</a></th>
      <th scope="col">Category  <a href="/admin/discussions/category/true">UP</a> <a href="/admin/discussions/category/false">Down</a></th>
      <th scope="col">Handle </th>

    </tr>
  </thead>
  <tbody>
    @for($i = 1; $i <= sizeof($discussions); $i++)
        <tr>
            <th scope="row">{{ $discussions[$i - 1]->id }}</th>
            <td>{{ $discussions[$i - 1]->discussion_title }}</td>
            <td>{{ $discussions[$i - 1]->discussion_description }}</td>
            <td>{{ $discussions[$i - 1]->discussion_views }}</td>
            <td>{{ $discussions[$i - 1]->discussion_user_id }}</td>
            <td>{{ $discussions[$i - 1]->discussion_category_id }}</td>

            <td>
              <a class="p-3" href="{{ route('discussions.edit', $discussions[$i - 1]->id) }}">Edit</a>
              <form action="{{ route('discussions.destroy', $discussions[$i - 1]->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" class="btn btn-link" value="Delete">
              </form>
            </td>
        </tr>
    @endfor
    
</table>
<a href="{{ route('discussions.create')}}" class="btn btn-primary btn-lg active " role="button" aria-pressed="true">Add discussions</a>
</div>
@endsection
