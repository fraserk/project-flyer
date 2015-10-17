<div class="form-group">
  {!! Form::label('city', 'City') !!}
  {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('zipcode', 'Zip Code') !!}
  {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('country', 'Country') !!}
  {!! Form::select('country', $countries, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('state', 'State') !!}
  {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('price', 'Sale price') !!}
  {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('description', 'Home description') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5]) !!}
</div>

<div class="form-group">
  {!! Form::label('photos', 'Photos') !!}
  {!! Form::file('photos', ['class' => 'form-control']) !!}
</div>
