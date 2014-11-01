@extends('layouts.main')

@section('content')

    <h1>Create new character</h1>

    {!! Form::model($character, ['url' => '/character/add', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('about', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Create new character', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop
