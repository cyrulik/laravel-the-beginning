@extends('layouts.main')

@section('content')

    <h1>Edit character</h1>

    Character was edited.

    <h2>{{ $character->name }}</h2>

    @if ($character->about)
        <article class="about">
            <p>{!! nl2br($character->about) !!}</p>
        </article>
    @endif

@stop
