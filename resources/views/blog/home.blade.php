@extends('layouts.master')

{{-- one line --}}
@section('title', 'Home')

{{-- more than one line --}}
@section('content')
  <h1>Welcome to Our blog</h1>
  <p>Laravel is funny</p>
  <a class="btn btn-sm btn-success" href="/blog/create">Create</a>
  <hr>

  <!-- foreach array in blade -->
  <ul>
    @foreach($blogs as $blog)
      {{-- <li>  {{ $user }} </li> --}}
      <li>
        <a href="/blog/{{$blog->id}}">{{ $blog->title }}</a><br />
        <a class="btn btn-sm btn-primary"href="/blog/{{$blog->id}}/edit">Edit</a>
        <form class="" action="/blog/{{$blog->id}}" method="post">
          <input class="btn btn-sm btn-danger" type="submit" name="submit" value="Delete">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
        </form>
      </li><hr>
    @endforeach
  </ul>
@endsection
