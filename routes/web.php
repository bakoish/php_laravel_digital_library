<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function ()
{
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/books', 'App\Http\Controllers\BooksController@index')->middleware(['auth'])->name('books.index');

Route::post('/books','App\Http\Controllers\BooksController@store');

Route::any('/books/create', 'App\Http\Controllers\BooksController@create')->middleware(['auth', 'is.admin'])->name('books.create');

Route::get('/books/{book}','App\Http\Controllers\BooksController@show');
Route::get('/books/showuser/{book}','App\Http\Controllers\BooksController@showforuser');

Route::any('/books/{book}/edit','App\Http\Controllers\BooksController@edit');

Route::put('/books/{book}','App\Http\Controllers\BooksController@update');

Route::any('/books/{book}/destroy','App\Http\Controllers\BooksController@destroy');

Route::get('/search','App\Http\Controllers\BooksController@search')->middleware(['auth']);

Route::post('/search/book', 'App\Http\Controllers\BooksController@searchbook')->middleware(['auth']);

Route::get('/borrowed', 'App\Http\Controllers\BorrowedController@index')->middleware(['auth', 'is.admin']);

Route::get('/borrowed/create', 'App\Http\Controllers\BorrowedController@create')->middleware(['auth', 'is.admin']);

Route::post('/borrowed/create','App\Http\Controllers\BorrowedController@store')->middleware(['auth']);

Route::get('/borrowed/switchstatus/{borrowed}','App\Http\Controllers\BorrowedController@switchstatus')->middleware(['auth', 'is.admin']);

