@extends('layouts.master')

@section('title', 'New flyer')

@section('content')
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
          @include('partials._errors')
          <div class="panel panel-default">
            <div class="panel-heading">
                <h3>@yield('title')</h3>
            </div>
            {!! Form::open(array('route' => 'flyers.store', 'files' => true)) !!}
                <div class="panel-body">
                    @include('flyers._form')
                </div>
                <div class="panel-footer">
                    <div class="form-group">
                      {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                      <a href="{{ route('flyers.index') }}" class="btn btn-default">Cancel</a>
                    </div>
                </div>
            {!! Form::close() !!}
          </div>
      </div>
    </div>
@stop
