<?php

use App\Http\Livewire\Authors\AuthorList;
use App\Http\Livewire\Authors\AuthorForm;
use App\Http\Livewire\Books\BookForm;
use App\Http\Livewire\Books\BookList;
use App\Http\Livewire\Categories\CategoryList;
use App\Http\Livewire\Categories\CategoryForm;
use App\Http\Livewire\Publishers\PublisherList;
use App\Http\Livewire\Publishers\PublisherForm;
use App\Http\Livewire\Students\StudentForm;
use App\Http\Livewire\Students\StudentList;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('author', AuthorList::class)->name('author.index');
Route::get('author/create', AuthorForm::class)->name('author.create');
Route::get('author/{author}/edit', AuthorForm::class)->name('author.edit');

Route::get('publisher', PublisherList::class)->name('publisher.index');
Route::get('publisher/create', PublisherForm::class)->name('publisher.create');
Route::get('publisher/{publisher}/edit', PublisherForm::class)->name('publisher.edit');

Route::get('category', CategoryList::class)->name('category.index');
Route::get('category/create', CategoryForm::class)->name('category.create');
Route::get('category/{category}/edit', CategoryForm::class)->name('category.edit');

Route::get('book', BookList::class)->name('book.index');
Route::get('book/create', BookForm::class)->name('book.create');
Route::get('book/{book}/edit', BookForm::class)->name('book.edit');

Route::get('student', StudentList::class)->name('student.index');
Route::get('student/create', StudentForm::class)->name('student.create');
Route::get('student/{student}/edit', StudentForm::class)->name('student.edit');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
