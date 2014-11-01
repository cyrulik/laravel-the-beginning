@extends('layouts.main')

@section('content')

@if (!is_null($character))

    <h2>{{ $character->name }}</h2>

    @if ($character->about)
        <article class="about">
            <p>{!! nl2br($character->about) !!}</p>
        </article>
    @endif

@else

    Selected character was not found.

@endif

@stop
