@extends('layouts.app')

@section('content')
<h1>Benvenuto nel Mini Gestionale Biblioteca</h1>
<p>Gestisci facilmente i libri della tua biblioteca.</p>
<div class="row mt-4">

<div class="col-md-6">
<div class="card shadow-sm">
<div class="card-body">

<h5>📚 Visualizza tutti i libri</h5>

<p>Controlla tutti i libri presenti nel database.</p>

<a href="{{ route('books.index') }}" class="btn btn-dark">
Vai alla lista
</a>

</div>
</div>
</div>


<div class="col-md-6">
<div class="card shadow-sm">
<div class="card-body">

<h5>➕ Inserisci un nuovo libro</h5>

<p>Aggiungi un nuovo libro alla biblioteca.</p>

<a href="{{ route('books.create') }}" class="btn btn-success">
Aggiungi libro
</a>

</div>
</div>
</div>

</div>

@endsection