@extends('layouts.app')

@section('content')

<h2>Lista Libri</h2>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>Titolo</th>
            <th>Autore</th>
            <th>Pagine</th>
            <th>Anno</th>
            <th>Copertina</th>
        </tr>
    </thead>
    <tbody>

@foreach($books as $book)


    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->pages }}</td>
        <td>{{ $book->year }}</td>
    <td>

          @if($book->image)

        <img src="{{ asset('storage/'.$book->image) }}" width="80">

         @else

        <img src="https://picsum.photos/80/120?random={{ $book->id }}">

         @endif

        </td> 
    </tr>
        @endforeach
    </tbody>
</table>

@endsection