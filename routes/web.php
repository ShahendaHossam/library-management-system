<?php

use App\Http\Livewire\Authors\AuthorList;
use App\Http\Livewire\Authors\AuthorForm;
use App\Http\Livewire\BookIssues\BookIssueForm;
use App\Http\Livewire\BookIssues\BookIssueList;
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

Route::get('book_issue', BookIssueList::class)->name('book_issue.index');
Route::get('book_issue/create', BookIssueForm::class)->name('book_issue.create');
Route::get('book_issue/{book_issue}/edit', BookIssueForm::class)->name('book_issue.edit');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;            
            

Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});