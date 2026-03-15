@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">

<div class="card shadow p-4" style="width:500px">

<h3 class="text-center mb-4">Modifica Libro</h3>

<form action="{{ route('books.update',$book) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label class="form-label">Titolo</label>
<input class="form-control" name="title" value="{{ $book->title }}">
</div>

<div class="mb-3">
<label class="form-label">Autore</label>
<input class="form-control" name="author" value="{{ $book->author }}">
</div>

<div class="mb-3">
<label class="form-label">Pagine</label>
<input class="form-control" name="pages" value="{{ $book->pages }}">
</div>

<div class="mb-3">
<label class="form-label">Anno</label>
<input class="form-control" name="year" value="{{ $book->year }}">
</div>

<button class="btn btn-primary w-100">
Aggiorna Libro
</button>

</form>

</div>

</div>

@endsection