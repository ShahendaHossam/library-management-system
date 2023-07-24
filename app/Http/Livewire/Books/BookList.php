<?php

namespace App\Http\Livewire\Books;

use App\Models\Book;
use Livewire\Component;

class BookList extends Component
{
    public Book $book;
    public $editMode = false;


    public function edit(Book $book)
    {
        $this->book = $book;
        $this->editMode = true;
        return redirect()->route('book.edit', $this->book->id);
    }

    public function render()
    {
        $books = Book::all();
        return view('livewire.books.book-list',compact('books'));
    }
}
