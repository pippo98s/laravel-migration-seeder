@extends('layouts.app')

@section('title-document')
    Movies
@endsection

@section('content')
    <h1>Tabella movies</h1>
    <ol>
        @foreach($movies as $movie)
            <li>
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