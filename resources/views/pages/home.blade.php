@extends('layouts.default')
@section('content')
    <ul>
        @foreach ($movies as $movie)
            <li class="movie-card">
                <h2 class="movie-card-title">{{ $movie->title }}</h2>
                <div class="movie-card-vote"><strong>Vote: </strong>{{ $movie->vote }}</div>
                <div class="movie-card-date"><strong>Date: </strong><time>{{ $movie->date }}</time></div>
                <div class="movie-card-nationality"><strong>Nationality: </strong>{{ $movie->nationality }}</div>
                <div class="movie-card-original-title"><strong>Original title: </strong>{{ $movie->original_title }}</div>
            </li>
            @if (!$loop->last) <hr> @endif
        @endforeach
    </ul>
@endsection