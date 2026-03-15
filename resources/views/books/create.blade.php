{{-- @extends('layouts.app')

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

@endsection --}}


@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">

<div class="card shadow p-4" style="width:500px">

<h3 class="text-center mb-4">Nuovo Libro</h3>

<form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<div class="mb-3">
<label>Titolo</label>
<input class="form-control" name="title">
</div>

<div class="mb-3">
<label>Autore</label>
<input class="form-control" name="author">
</div>

<div class="mb-3">
<label>Pagine</label>
<input class="form-control" name="pages">
</div>

<div class="mb-3">
<label>Anno</label>
<input class="form-control" name="year">
</div>

<div class="mb-3">
<label>Immagine</label>
<input type="file" class="form-control" name="image">
</div>

<button class="btn btn-success w-100">
Salva Libro
</button>

</form>

</div>

</div>

@endsection