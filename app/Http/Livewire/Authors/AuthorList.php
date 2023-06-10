<?php

namespace App\Http\Livewire\Authors;

use App\Models\Author;
use Livewire\Component;

class AuthorList extends Component
{
    public Author $author;
    public $editMode = false;


    public function edit(Author $author){
        $this->author = $author;
        $this->editMode = true;
        return redirect()->route('author.edit', $this->author->id);
    }

    public function render()
    {
        $authors = Author::all();
        return view('livewire.authors.author-list' , compact('authors'));
    }
}
