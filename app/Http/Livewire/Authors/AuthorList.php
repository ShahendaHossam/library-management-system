<?php

namespace App\Http\Livewire\Authors;

use App\Models\Author;
use Livewire\Component;

class AuthorList extends Component
{
    public function render()
    {
        $authors = Author::all();
        return view('livewire.authors.author-list' , compact('authors'));
    }
}
