@extends('layouts.master')

@section('title', 'Signup')

@section('content')
    @include('partials._errors')

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Registration</h2>
            </div>
            <div class="panel-body">
                {!! Form::open() !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, [ 'class' => 'form-control', 'placeholder' => 'Name' ]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', null, [ 'class' => 'form-control', 'placeholder' => 'Email' ]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', [ 'class' => 'form-control', 'placeholder' => 'Password' ]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirm password') !!}
                    {!! Form::password('password_confirmation', [ 'class' => 'form-control', 'placeholder' => 'Confirm password' ]) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Register', [ 'class' => 'btn btn-primary' ]) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
