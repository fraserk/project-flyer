@extends('layouts.master')

@section('title', 'Edit flyer')

@section('content')
    <h1>@yield('title')</h1>
    {!! Form::open(array('route' => 'flyers.update', 'files' => true)) !!}
        @include('flyers._form')
    {!! Form::close() !!}
@stop
