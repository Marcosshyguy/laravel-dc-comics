@extends('layouts.app')
@section('title', $comic->title)
@section('content')
    <p>{{ $comic->title }}</p>
@endsection
