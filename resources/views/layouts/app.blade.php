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
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif
</div>

@else

<div class="col-12">
@yield('content')
</div>

@endif

</div>

</div>
