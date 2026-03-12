<!DOCTYPE html>
<html>
<head>
    <title>Mini Gestionale Biblioteca</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('homepage') }}">Biblioteca</a>
@auth
<p>Ciao {{ auth()->user()->name }} - {{ auth()->user()->email }}</p>
@endauth

<div class="ms-auto">

@guest
<a class="btn btn-outline-light me-2" href="{{ route('login') }}">Login</a>
<a class="btn btn-success" href="{{ route('register') }}">Registrati</a>
@endguest

@auth
<span class="text-white me-3">
{{ auth()->user()->email }}
</span>

<form action="/logout" method="POST" class="d-inline">
@csrf
<button class="btn btn-danger">Logout</button>
</form>
@endauth

</div>

</div>
</nav>

<div class="container mt-4">

<div class="row">

@if(Route::currentRouteName() == 'homepage')


<div class="col-md-9">
@yield('content')
</div>

@else

<div class="col-12">
@yield('content')
</div>

@endif

</div>

</div>
{{-- @auth
<form action="/logout" method="POST">
  @csrf
  <button>Logout</button>
</form>
@endauth


@guest
<a href="/login">Accedi</a>
<a href="/register">Registrati</a>
@endguest
<div>
  <a class="btn btn-outline-light" href="{{ route('books.index') }}">Lista Libri</a>
  <a class="btn btn-success" href="{{ route('books.create') }}">Aggiungi Libro</a>
</div>
</div>
</nav> --}}

{{-- 
@guest
<a class="btn btn-outline-light me-2" href="{{ route('login') }}">Login</a>
<a class="btn btn-success" href="{{ route('register') }}">Registrati</a>
@endguest


@auth
<span class="text-white me-3">
{{ auth()->user()->email }}
</span>

<form action="/logout" method="POST" class="d-inline">
@csrf
<button class="btn btn-danger">Logout</button>
</form>
@endauth

@guest
<a class="btn btn-outline-light me-2" href="{{ route('login') }}">Login</a>
<a class="btn btn-success" href="{{ route('register') }}">Registrati</a>
@endguest


@auth
<span class="text-white me-3">
{{ auth()->user()->email }}
</span>

<form action="/logout" method="POST" class="d-inline">
@csrf
<button class="btn btn-danger">Logout</button>
</form>
@endauth  --}}