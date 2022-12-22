@extends('layouts.app')

@section('title')
    Dc Comics
@endsection

@section('content')
    <h1>Dc Comics</h1>
    <a href="{{ route('comics.create') }}">Add new comic</a>
    <table class="table table-striped table-hover">

        <tbody>
            @foreach ($comicses as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}" class="card-link">Show comic</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="card-link">Update comic</a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" class="d-inline" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete comic</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
