<?php

namespace App\Http\Livewire\Books;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BookForm extends Component
{
    public Book $book;
    public $editMode = false;

    protected $rules = [
        'book.book_name' => 'nullable|max:255',
        'book.category_id' => 'nullable|max:255',
        'book.author_id' => 'nullable|max:255',
        'book.publisher_id' => 'nullable|max:255',
    ];

    public function save()
    {
        $this->validate();
        $users = Auth::user();
        $this->book->user_id = $users->id;
        $this->book->status = 'Available';
        $this->book->save();
        return redirect()->route('book.index');
    }

    public function mount()
    {
        if (isset($this->book->id)) {
            $this->editMode = true;
        } else {
            $this->book = new Book();
        }
    }
    public function render()
    {
        $categories = Category::all();
        $authors = Author::all();
        $publishers = Publisher::all();
        return view('livewire.books.book-form', compact('categories', 'authors', 'publishers'));
    }
}
