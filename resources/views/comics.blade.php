@extends('layouts.app')

@section('title-document')
    Comics
@endsection

@section('content')
    <h1>Tabella comics</h1>
    <ol type="I">
        @foreach($comics as $comic)
            <li>
                <ul>
                    <li><strong>titolo: </strong> {{ $comic->titolo }}</li>
                    <li><strong>autore: </strong> {{ $comic->autore }}</li>
                    <li><strong>anno: </strong> {{ $comic->anno }}</li>
                    <li><strong>recensione: </strong> {{ $comic->recensione }}</li>
                    <li><strong>voto: </strong> {{ $comic ->voto}}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>

@endsection