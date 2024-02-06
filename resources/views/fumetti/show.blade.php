@extends('layout.app')

@section('content')

    <h1>{{ $fumetto->title }}</h1>

    <p><strong>Description:</strong> {{ $fumetto->description }}</p>
    <p><strong>Price:</strong> {{ $fumetto->price }}</p>
    <p><strong>Series:</strong> {{ $fumetto->series }}</p>
    <p><strong>Sale Date:</strong> {{ $fumetto->sale_date }}</p>
    <p><strong>Type:</strong> {{ $fumetto->type }}</p>
    <p><strong>Artists:</strong> {{ implode(', ', $fumetto->artists) }}</p>
    <p><strong>Writers:</strong> {{ implode(', ', $fumetto->writers) }}</p>
    
    <a href="{{ route('fumetti.index') }}">Torna alla lista dei fumetti</a>

@endsection