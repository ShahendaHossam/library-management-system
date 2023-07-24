<?php

use App\Http\Livewire\BootstrapTables;
use App\Http\Livewire\Components\Buttons;
use App\Http\Livewire\Components\Forms;
use App\Http\Livewire\Components\Modals;
use App\Http\Livewire\Components\Notifications;
use App\Http\Livewire\Components\Typography;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Err404;
use App\Http\Livewire\Err500;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Lock;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\ForgotPasswordExample;
use App\Http\Livewire\Index;
use App\Http\Livewire\LoginExample;
use App\Http\Livewire\ProfileExample;
use App\Http\Livewire\RegisterExample;
use App\Http\Livewire\Transactions;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ResetPasswordExample;
use App\Http\Livewire\UpgradeToPro;
use App\Http\Livewire\Users;


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
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/login');

Route::get('/register', Register::class)->name('register');

Route::get('/login', Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::get('/404', Err404::class)->name('404');
Route::get('/500', Err500::class)->name('500');
Route::get('/upgrade-to-pro', UpgradeToPro::class)->name('upgrade-to-pro');

Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/profile-example', ProfileExample::class)->name('profile-example');
    Route::get('/users', Users::class)->name('users');
    Route::get('/login-example', LoginExample::class)->name('login-example');
    Route::get('/register-example', RegisterExample::class)->name('register-example');
    Route::get('/forgot-password-example', ForgotPasswordExample::class)->name('forgot-password-example');
    Route::get('/reset-password-example', ResetPasswordExample::class)->name('reset-password-example');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/transactions', Transactions::class)->name('transactions');
    Route::get('/bootstrap-tables', BootstrapTables::class)->name('bootstrap-tables');
    Route::get('/lock', Lock::class)->name('lock');
    Route::get('/buttons', Buttons::class)->name('buttons');
    Route::get('/notifications', Notifications::class)->name('notifications');
    Route::get('/forms', Forms::class)->name('forms');
    Route::get('/modals', Modals::class)->name('modals');
    Route::get('/typography', Typography::class)->name('typography');
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