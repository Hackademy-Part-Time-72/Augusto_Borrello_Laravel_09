<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookCreatedMail;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        // Book::create($request->all());
        // return redirect()->route('books.index');
       
       {
        $request->validate([
        'title' => 'required|max:255',
        'author' => 'required|max:255',
        'pages' => 'required|integer|min:1',
        'year' => 'nullable|integer'
    ]);
    $book = Book::create($request->all());

Mail::to('test@test.com')->send(new BookCreatedMail($book));

return redirect()->route('books.index')
        ->with('success', 'Libro creato con successo!');

    // Book::create($request->all());

//     return redirect()->route('books.index');
//     return redirect()->route('books.index')
//         ->with('success', 'Libro creato con successo!');
// }
       
//     }
// }
    }
  }
}

