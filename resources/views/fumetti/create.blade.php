@extends('layout.app')

@section('content')
    <form action="{{ route('fumetti.store') }}" method="POST" class="d-flex align-items-center flex-column mb-5">
        @csrf

        <div class="card mb-3" style="width: 24rem;">
            <div class="card-header py-3">
                <h3 class="text-center text-success"><strong>Create New Comic</strong></h3>
                <label for="title" class="mb-2"><strong>Title:</strong></label> <br>
                <input type="text" name="title" id="title" style="width: 22rem;">
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item py-3">
                <label for="description" class="mb-2"><strong>Description:</strong></label> <br>
                <input type="text" name="description" id="description" style="width: 22rem;">
              </li>
              <li class="list-group-item py-3">
                <label for="thumb" class="mb-2"><strong>Thumb:</strong></label> <br>
                <input type="text" name="thumb" id="thumb" style="width: 22rem;">
              </li>
              <li class="list-group-item py-3"> 
                <label for="price" class="mb-2"><strong>Price:</strong></label> <br>
                <input type="string" name="price" id="price" style="width: 22rem;">
              </li>
              <li class="list-group-item py-3">
                <label for="sale_date" class="mb-2"><strong>Sale Date:</strong></label> <br>
                <input type="date" name="sale_date" id="sale_date" style="width: 22rem;">
              </li>
              <li class="list-group-item py-3">
                <label for="series" class="mb-2"><strong>Series:</strong></label> <br>
                <input type="string" name="series" id="series" style="width: 22rem;">
              </li>
              <li class="list-group-item py-3">
                <label for="type" class="mb-2"><strong>Type:</strong></label> <br>
                <input type="string" name="type" id="type" style="width: 22rem;">
              </li>
              {{-- <li class="list-group-item">
                
              </li> --}}
            </ul>
          </div>
        
          <button type="submit" class="btn btn-success">Create Comic</button>
    </form>   

    <div class="d-flex justify-content-center">
        <a href="{{ route('fumetti.index') }}" class="btn btn-warning mt-3">Torna alla lista dei fumetti</a>
    </div>
@endsection
