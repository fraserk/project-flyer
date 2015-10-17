@extends('layouts.master')

@section('title', 'Flyers')

@section('content')
    <h1>@yield('title')</h1>
    <a href="{{ route('flyers.create') }}" class="btn btn-primary">New flyer</a>
    <br><br>
    @if(count($flyers) > 0)
    <table class="table table-striped">
        <tr>
            <th>Country</th>
            <th>State</th>
            <th>City</th>
            <th>Zipcode</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        @foreach($flyers as $flyer)
            <tr>
                <td>{{ $flyer->country }}</td>
                <td>{{ $flyer->state }}</td>
                <td>{{ $flyer->city }}</td>
                <td>{{ $flyer->zipcode }}</td>
                <td>{{ $flyer->price }}</td>
                <td>{{ str_limit($flyer->description, 10, "...") }}</td>
            </tr>
        @endforeach
    </table>
    @else
        <p>There are no flyers...</p>
    @endif
@stop
