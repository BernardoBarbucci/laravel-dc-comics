@extends('layout.app')

@section('content')
    <h1>Comics List</h1>

    <ul>
        @foreach($fumetti as $fumetto)
            <li>
                <a href="{{ route('fumetti.show', $fumetto->id) }}">
                    {{ $fumetto->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection