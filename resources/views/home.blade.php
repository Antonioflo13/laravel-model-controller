@extends('layout.layout')

@section('main-content')
    @foreach ($movies as $movie)
        <div>
            <h1>{{ $movie["title"] }}</h1>
        </div>
    @endforeach
@endsection