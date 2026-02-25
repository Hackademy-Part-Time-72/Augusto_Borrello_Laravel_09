<!DOCTYPE html>
<html>
<head>
    <title>Mini Gestionale Biblioteca</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('homepage') }}">Biblioteca</a>

    <div>
        <a class="btn btn-outline-light" href="{{ route('books.index') }}">Lista Libri</a>
        <a class="btn btn-success" href="{{ route('books.create') }}">Aggiungi Libro</a>
    </div>
  </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

</body>
</html>