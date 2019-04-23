@extends('layouts.master')

{{-- one line --}}
@section('title', 'Detail')

{{-- more than one line --}}
@section('content')

    <h1>Welcome to Our detail blog</h1>

    <!-- echo string in blade -->
    <p>  {{ $blog }} </p>
    <p>  {{ $user }} </p>

    <!-- foreach array in blade -->
    <ul>
      @foreach($users as $user)
        {{-- <li>  {{ $user }} </li> --}}
        <li>  {{ $user->username.' '.$user->password }} </li>
      @endforeach
    </ul>

    {{-- echo html/script --}}
    {!! $unescaped !!}

    @if(count($users) > 5)
      <p>User more than 5</p>
    @else
      <p>User less than 5</p>
    @endif

@endsection
