@extends('layout.app')

@section('content')
    <h1>Create New Comic</h1>
    <form action="{{ route('fumetti.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">

            <label for="description">Description:</label>
            <input type="text" name="description" id="description">
            
            <label for="thumb">Thumb:</label>
            <input type="text" name="thumb" id="thumb">

            <label for="price">Price:</label>
            <input type="string" name="price" id="price">

            <label for="series">Series:</label>
            <input type="string" name="series" id="series">
            
            <label for="type">Type:</label>
            <input type="string" name="type" id="type">

        </div>
        
        <button type="submit">Create Comic</button>
    </form>
@endsection
