@extends('layouts.main')

@section('content')

    <h1>Create new character</h1>

    New character was created.

    <h2>{{ $character->name }}</h2>

    @if ($character->about)
        <article class="about">
            <p>{!! nl2br($character->about) !!}</p>
        </article>
    @endif

@stop
