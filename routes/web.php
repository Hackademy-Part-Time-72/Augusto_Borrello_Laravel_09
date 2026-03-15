<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');


// Route::get('/books', [BookController::class, 'index'])->name('books.index');
// Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
// Route::post('/books/store', [BookController::class, 'store'])->name('books.store');

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::middleware('auth')->group(function(){

Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

Route::post('/books/store', [BookController::class, 'store'])->name('books.store');

});
Route::resource('books', BookController::class);
Route::middleware('auth')->group(function () {

Route::resource('tasks', TaskController::class);

});