@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
<div class="col-md-6">

<div class="card shadow-lg border-0 rounded-4">

<div class="card-body p-5">

<h2 class="text-center mb-4">Registrazione</h2>

<form method="POST" action="{{ route('register') }}">
@csrf

<div class="mb-3">
<label class="form-label">Nome</label>
<input type="text" name="name" class="form-control" placeholder="Inserisci nome">
@error('name')
<div class="text-danger small">{{ $message }}</div>
@enderror
</div>

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

<div class="mb-3">
<label class="form-label">Conferma password</label>
<input type="password" name="password_confirmation" class="form-control" placeholder="Ripeti password">
</div>

<div class="d-grid">
<button class="btn btn-success">Registrati</button>
</div>

</form>

</div>
</div>
</div>
</div>

@endsection