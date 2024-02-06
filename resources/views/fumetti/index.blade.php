@extends('layout.app')

@section('content')

    <div class="mb-4 d-flex justify-content-center">
        <a href="{{ route('fumetti.create') }}" class="btn btn-warning">
            Clicca qua per aggiungere un nuovo fumetto!
        </a>
    </div>

    <ul class="d-flex flex-wrap justify-content-center">
        @foreach($fumetti as $fumetto)
            <li class="m-4">
                <section class="d-flex justify-content-center">
                    <div class="card p-2" style="width: 18rem; min-height: 50rem;">
                        <img src="{{ $fumetto->thumb }}" class="card-img-top rounded" alt="comic img">
                        <div class="card-body">
                            <h3 class="card-title text-center text-danger fw-bold">{{ $fumetto->title }}</h3>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <p><strong>Price:</strong> {{ $fumetto->price }}</p>
                          </li>
                          <li class="list-group-item">
                            <p><strong>Series:</strong> {{ $fumetto->series }}</p>
                          </li>
                          <li class="list-group-item">
                            <p><strong>Type:</strong> {{ $fumetto->type }}</p>
                          </li>
                          <li class="text-center py-2">
                            <a href="{{ route('fumetti.show', $fumetto->id) }}">
                                Clicca qua per sapere di piu su questo fumetto!
                            </a>
                          </li>
                        </ul>
                      </div>
                </section>
            </li>
        @endforeach
    </ul>
@endsection