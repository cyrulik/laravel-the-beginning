@extends('layouts.main')

@section('content')

@if (!is_null($character))

    Character id {{ $character->id }}.

    {!! Form::open() !!}

    {!! Form::close() !!}

@else

    Selected character was not found.

@endif

@stop
