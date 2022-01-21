@extends('layouts.default')
@section('content')
    <ul>
        @foreach ($movies as $movie)
            <li>
                <h2>{{ $movie->original_title }}</h2>
                <time>{{ $movie->date }}</time>
                <div>{{ $movie->vote }}</div>
            </li>
            @if (!$loop->last) <hr> @endif
        @endforeach
    </ul>
@endsection