@extends('layouts.app')

@section('title')
    Dc Comics
@endsection

@section('content')
    <h1>Dc Comics</h1>
    <a href="{{ route('create') }}">Add new comic</a>
    @foreach ($comics as $comic)
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h3 class="card-title">{{ $comic->title }}</h3>
                <h6 class="card-subtitle mb-2 text-muted">{{ $comic->series }}</h6>
                <p class="card-text">Price{{ $comic->price }}</p>
                <a href="{{ route('show', $comic->id) }}" class="card-link">Card link</a>
            </div>

        </div>
    @endforeach
@endsection
