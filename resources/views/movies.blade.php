@extends('layouts.app')

@section('link-css')
    <link rel="stylesheet" href="{{ mix ('css/movies.css') }}">
@endsection

@section('content')
    <h1>Tabella movies</h1>
    <ol>
        @foreach($movies as $movie)
            <li class="movie">
                <ul>
                    <li> <strong>titolo : </strong> {{ $movie->title }}</li>
                    <li> <strong>annno : </strong> {{ $movie->year }}</li>
                    <li> <strong>recensione : </strong> {{ $movie->overview }}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>

@endsection