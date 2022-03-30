@extends('layouts.base')

@section('pageTitle', 'Home page')

@section('content')

    <h1>Elenco dei libri</h1>

    <ul>
        @foreach ($books as $book)
            <li>
                {{$book['id']}} - {{$book->title}} - {{$book->author}} - {{$book->description}} - {{$book->rating}}
            </li>
        @endforeach
    </ul>

@endsection
