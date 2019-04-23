@extends('layouts.master')

{{-- one line --}}
@section('title', 'Detail')

{{-- more than one line --}}
@section('content')

    {{-- @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif --}}

    <h1>Create blog</h1>

    <form class="" action="/blog" method="post">

      <input type="text" name="title" value="{{old('title')}}"><br />
        @if ($errors->has('title'))
          <p> {{$errors->first('title')}} </p>
        @endif

      <textarea name="description" rows="8" cols="80">{{old('description')}}</textarea><br />
      @if ($errors->has('description'))
        <p> {{$errors->first('description')}} </p>
      @endif

      <input type="submit" name="submit" value="Create">
      {{ csrf_field() }}

    </form>

@endsection
