@extends('layouts.app')

@section('content')
    <ol type="I">
        @foreach($comics as $comic)
            <li>
                <ul>
                    <li>{{ $comic->titolo }}</li>
                    <li>{{ $comic->autore }}</li>
                    <li>{{ $comic->anno }}</li>
                    <li>{{ $comic->recensione }}</li>
                    <li>{{ $comic ->voto}}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>

@endsection