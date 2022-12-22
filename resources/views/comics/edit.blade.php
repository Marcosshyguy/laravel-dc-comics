@extends('layouts.app')
@section('title')
    Change comic data
@endsection


@section('content')
    <h2 class="text-center">Add new comic</h2>
    <p class="text-center">Now you are changing: {{ $comicToChange->title }}</p>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-2">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comicToChange->title }}">
            </div>

            <div class="mb-2">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="10">{{ $comicToChange->description }}</textarea>
            </div>

            <div class="mb-2">
                <label for="thumb">Image</label>
                <input type="text" class="form-control" id="thumb" name="thumb"
                    value="{{ $comicToChange->thumb }}">
            </div>

            <div class="mb-2">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price"
                    value="{{ $comicToChange->price }}">
            </div>

            <div class="mb-2">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series"
                    value="{{ $comicToChange->series }}">
            </div>

            <label for="type">Type</label>
            <div>
                <select name="type" id="type" class="form-select">
                    <option value="comic book" @selected($comicToChange->type === 'comic book')>Comic book</option>
                    <option value="graphic novel" @selected($comicToChange->type === 'graphic novel')>Graphic novel</option>
                </select>

            </div>

            <div class="mb-2">
                <label for="sale_date">Sale date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date"
                    value="{{ $comicToChange->sale_date }}">
            </div>

            {{-- <div class="mb-2">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comicToChange->type }}">
            </div> --}}
            <button class="btn btn-dark" type="submit">Change</button>
        </form>
    </div>
@endsection
