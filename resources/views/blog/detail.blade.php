@extends('layouts.master')

{{-- one line --}}
@section('title', 'Detail')

{{-- more than one line --}}
@section('content')

    <h1>Welcome to Our detail blog</h1>

    <img src="{{ asset('storage/blog/'.$blog->featured_img) }}" alt="" width="150">
    <h3>{{ $blog->title }}</h3>
    <!-- foreach array in blade -->
    <hr>
    <p>{{ $blog->description }}</p>

@endsection
