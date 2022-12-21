@extends('layouts.app')
@section('title', $comic->title)
@endsection
@section('content')
@foreach ($comic as $item)
@endforeach
@endsection
