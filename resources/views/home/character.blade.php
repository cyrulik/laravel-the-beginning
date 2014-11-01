@extends('layouts.main')

@section('content')

@if (!is_null($character))

	Character id {{ $character->id }}.

@else

	Selected character was not found.

@endif

@stop
