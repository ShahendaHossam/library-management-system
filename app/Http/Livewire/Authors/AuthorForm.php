<?php

namespace App\Http\Livewire\Authors;

use App\Models\Author;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AuthorForm extends Component
{
    public Author $author;
    public $editMode = false;

    protected $rules = [
        'author.author_name' => 'nullable|max:255',
        'author.author_email' => 'nullable|max:255',
        'author.author_address' => 'nullable|max:255',
        'author.author_phone' => 'nullable|max:255',
    ];

    public function save(){
        $this->validate();
        $users = Auth::user();
        $this->author->user_id = $users->id;
        $this->author->save();
        return redirect()->route('author.index');
    }

    public function mount(){
        if(isset($this->author->id)){
            $this->editMode = true;
        }else{
            $this->author = new Author();
        }
    }

    public function render()
    {
        return view('livewire.authors.author-form');
    }
}
