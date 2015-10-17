@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    <div class="jumbotron">
      <h1>@yield('title')</h1>
      <p>This is a simple PHP Laravel application...</p>
      <a href="{{ route('flyers.create') }}" class="btn btn-primary">New flyer</a>
    </div>
@stop
