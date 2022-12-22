@extends('layouts.app')
@section('title')
    Add Comics
@endsection


@section('content')
    <h2>Add new comic</h2>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-2">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
        </div>

        <div class="mb-2">
            <label for="thumb">Image</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div class="mb-2">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="mb-2">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>

        <div class="mb-2">
            <label for="sale_date">Sale date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>

        <div class="mb-2">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>



        <button class="btn btn-dark" type="submit">Add</button>
    </form>
@endsection
