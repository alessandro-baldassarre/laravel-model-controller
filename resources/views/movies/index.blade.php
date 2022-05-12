@extends('layouts.main')


<div>
    @foreach ($movies as $movie)

    <p>{{$movie->title}}</p>

    @endforeach
</div>
