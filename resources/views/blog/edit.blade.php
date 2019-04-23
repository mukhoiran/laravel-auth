@extends('layouts.master')

{{-- one line --}}
@section('title', 'Detail')

{{-- more than one line --}}
@section('content')

    <h1>Edit this page</h1>

    <form class="" action="/blog/{{$blog->id}}" method="post">
      <input type="text" name="title" value="{{$blog->title}}"><br />
      <textarea name="description" rows="8" cols="80">{{$blog->description}}</textarea><br />
      <input type="submit" name="submit" value="Edit">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
    </form>

@endsection
