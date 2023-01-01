@extends('layouts.app')

@section('title')
    Dc Comics
@endsection

@section('content')
    <h1 class="text-center">Dc Comics</h1>
    <div class="container">
        <table class="table table-striped table-hover">

            <tbody>
                @foreach ($comicses as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Show comic</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">Update comic</a>
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
        <a href="{{ route('comics.create') }} " class="btn btn-info">Add new comic</a>
    </div>
@endsection
