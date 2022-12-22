@extends('layouts.app')
@section('title', $comic->title)
@section('content')
    <h2>Show comic details</h2>
    <h4>{{ $comic->title }}</h4>
    <p>{{ $comic->price }}</p>
    <p>{{ $comic->series }}</p>
    <p>{{ $comic->type }}</p>
    <img class="mb-2" src="{{ $comic->thumb }}" alt="">
    <p>{{ $comic->description }}</p>
@endsection
