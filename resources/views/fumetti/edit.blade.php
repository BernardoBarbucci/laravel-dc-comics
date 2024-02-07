@extends('layout.app')

@section('content')
    <form action="{{ route('fumetti.store') }}" method="POST" class="d-flex align-items-center flex-column mb-5">
        @csrf

        @method('PUT')
        <div class="card mb-3" style="width: 24rem;">
            <div class="card-header py-3">
                <h3 class="text-center text-success"><strong>Modify Comic</strong></h3>
                <label for="title" class="mb-2"><strong>Title:</strong></label> <br>
                <input type="text" name="title" id="title" value="{{ $fumetto->title }}" style="width: 22rem;">
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item py-3">
                <label for="description" class="mb-2"><strong>Description:</strong></label> <br>
                <input type="text" name="description" id="description" value="{{ $fumetto->description }}" style="width: 22rem;">
              </li>
              <li class="list-group-item py-3">
                <label for="thumb" class="mb-2"><strong>Thumb:</strong></label> <br>
                <input type="text" name="thumb" id="thumb" value="{{ $fumetto->thumb }}" style="width: 22rem;">
              </li>
              <li class="list-group-item py-3"> 
                <label for="price" class="mb-2"><strong>Price:</strong></label> <br>
                <input type="text" name="price" id="price" value="{{ $fumetto->price }}" style="width: 22rem;">
              </li>
              <li class="list-group-item py-3">
                <label for="sale_date" class="mb-2"><strong>Sale Date:</strong></label> <br>
                <input type="date" name="sale_date" id="sale_date" value="{{ $fumetto->sale_date }}" style="width: 22rem;">
              </li>
              <li class="list-group-item py-3">
                <label for="series" class="mb-2"><strong>Series:</strong></label> <br>
                <input type="text" name="series" id="series" value="{{ $fumetto->series }}" style="width: 22rem;">
              </li>
              <li class="list-group-item py-3">
                <label for="type" class="mb-2"><strong>Type:</strong></label> <br>
                <input type="text" name="type" id="type" value="{{ $fumetto->type }}" style="width: 22rem;">
              </li>
            </ul>
          </div>
        
          <button type="submit" class="btn btn-success">Create Comic</button>
    </form>   

    <div class="d-flex justify-content-center">
        <a href="{{ route('fumetti.index') }}" class="btn btn-warning mt-3">Torna alla lista dei fumetti</a>
    </div>
@endsection
