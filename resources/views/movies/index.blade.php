@extends('layouts.main')

@section('main')

<div class="container">

    @foreach ($movies as $movie)

    <div class="movie-card">
        <h2>{{$movie->title}} </h2>
        <h3>Original Title: {{$movie->original_title}} </h3>
        <h3>Nationality: {{$movie->nationality}} </h3>
        <h3>Date: {{$movie->date}} </h3>
        <h3>Vote: {{$movie->vote}} </h3>
    </div>

    @endforeach

</div>


@endsection
