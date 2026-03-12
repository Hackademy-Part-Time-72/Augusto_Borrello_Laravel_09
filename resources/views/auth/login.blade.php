@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
<div class="col-md-5">

<div class="card shadow-lg border-0 rounded-4">

<div class="card-body p-5">

<h2 class="text-center mb-4">Login</h2>

<form method="POST" action="{{ route('login') }}">
@csrf

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control" placeholder="Inserisci email">
@error('email')
<div class="text-danger small">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
<label class="form-label">Password</label>
<input type="password" name="password" class="form-control" placeholder="Inserisci password">
@error('password')
<div class="text-danger small">{{ $message }}</div>
@enderror
</div>

<div class="d-grid">
<button class="btn btn-dark">Login</button>
</div>

</form>

</div>
</div>
</div>
</div>

<p class="text-center mt-3">
Non hai un account?
<a href="{{ route('register') }}">Registrati</a>
</p>

@endsection