@extends('layouts.app')
@section('title')
    Change comic data
@endsection


@section('content')
    <h2 class="text-center">Add new comic</h2>
    <p class="text-center">Now you are changing: {{ $comicToChange->title }}</p>
    <div class="container">
        <form action="{{ route('comics.update', $comicToChange->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-2">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $comicToChange->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="10">{{ old('description', $comicToChange->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="thumb">Image</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                    name="thumb" value="{{ old('thumb', $comicToChange->thumb) }}">
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="price">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ old('price', $comicToChange->price) }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="series">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror"" id="series"
                    name="series" value="{{ old('series', $comicToChange->series) }}">
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <label for="type">Type</label>
            <div>
                <select name="type" id="type" class="form-select @error('sale_date') is-invalid @enderror">
                    <option value="comic book" @selected(old('type', $comicToChange->type) === 'comic book')>Comic book</option>
                    <option value="graphic novel" @selected(old('type', $comicToChange->type) === 'graphic novel')>Graphic novel</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="sale_date">Sale date</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('sale_date', $comicToChange->sale_date) }}">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-dark" type="submit">Change</button>
        </form>
    </div>
@endsection
