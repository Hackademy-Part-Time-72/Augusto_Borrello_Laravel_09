<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\BookStoreRequest;
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
            public function store(BookStoreRequest $request)
            {
                
                $image = null;
                
                if ($request->hasFile('image')) {
                    
                    $image = $request->file('image')->store('images','public');
                    
                    }
                    $book = Book::create([
                        'title' => $request->title,
                        'author' => $request->author,
                        'pages' => $request->pages,
                        'year' => $request->year,
                        'image' => $image,
                        ]);

                        Mail::to('test@email.it')->send(new BookCreatedMail($book));
                        
                        return redirect()
                        ->route('books.index')
                        ->with('success','Libro creato con successo!');
            }

                        public function edit(Book $book)
                        {
                            return view('books.edit', compact('book'));
                            }
                            
                            public function update(Request $request, Book $book)
                            {
                                $book->update($request->all());
                                return redirect()->route('books.index');
                                }
                                
                                public function destroy(Book $book)
                                {
                                    $book->delete();
                                    return redirect()->route('books.index');
                                    }
                                    }