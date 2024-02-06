@extends('layout.app')

@section('content')
    {{-- <p><strong>Artists:</strong> {{ implode(', ', $fumetto->artists) }}</p>
    <p><strong>Writers:</strong> {{ implode(', ', $fumetto->writers) }}</p> --}}

    <div class="card" style="width: 18rem;">
        <img src="{{ $fumetto->thumb }}" class="card-img-top" alt="comic img">
        <div class="card-body">
            <h5 class="card-title">{{ $fumetto->title }}</h5>
            <p class="card-text">
                <strong>Description:</strong> {{ $fumetto->description }}
            </p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <p><strong>Price:</strong> {{ $fumetto->price }}</p>
          </li>
          <li class="list-group-item">
            <p><strong>Series:</strong> {{ $fumetto->series }}</p>
          </li>
          <li class="list-group-item">
            <p><strong>Sale Date:</strong> {{ $fumetto->sale_date }}</p>
          </li>
          <li class="list-group-item">
            <p><strong>Type:</strong> {{ $fumetto->type }}</p>
          </li>
          {{-- <li class="list-group-item">
            <p>QUA CI ANDREBBERO GLI ARTISTS</p>
          </li>

          <li class="list-group-item">
            <p>QUA CI ANDREBBERO GLI WRITERS</p>
          </li> --}}
        </ul>
        <div class="card-body">
          {{-- <a href="#" class="card-link">Card link</a> --}}
          <a href="{{ route('fumetti.index') }}">Torna alla lista dei fumetti</a>
        </div>
      </div>
@endsection