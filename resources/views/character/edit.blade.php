@extends('layouts.main')

@section('content')

@if (!is_null($character))

    <h2>{{ $character->name }}</h2>

    {!! Form::model($character, ['url' => '/character/' . $character->id . '/edit', 'method' => 'PATCH']) !!}

    <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('about', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Edit character', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@else

    Selected character was not found.

@endif

@stop
