@extends('layouts.app')

@section('content')

<h2>Aggiungi Libro</h2>

<form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <input type="text" name="title" class="form-control" placeholder="Titolo">
    </div>

    <div class="mb-3">
        <input type="text" name="author" class="form-control" placeholder="Autore">
    </div>

    <div class="mb-3">
        <input type="number" name="pages" class="form-control" placeholder="Pagine">
    </div>

    <div class="mb-3">
        <input type="number" name="year" class="form-control" placeholder="Anno">
    </div>
     <div class="mb-3">
        <label class="form-label">Cover Libro</label>
        <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>

@endsection