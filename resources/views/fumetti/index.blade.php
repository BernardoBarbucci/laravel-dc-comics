@extends('layout.app')

@section('content')

    <ul>
        @foreach($fumetti as $fumetto)
            <li>
                <a href="{{ route('fumetti.show', $fumetto->id) }}">
                    {{ $fumetto->title }}
                </a>
            </li>
        @endforeach
    </ul>

    <div>
        <a href="{{ route('fumetti.create') }}" class="btn btn-warning">
            Utilizza questo pulsante per aggiungere un nuovo fumetto
        </a>
    </div>
@endsection