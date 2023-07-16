<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategoryForm extends Component
{
    public Category $category;
    public $editMode = false;

    protected $rules = [
        'category.category_name' => 'nullable|max:255',
        'category.category_email' => 'nullable|max:255',
        'category.category_address' => 'nullable|max:255',
        'category.category_phone' => 'nullable|max:255',
    ];

    public function save()
    {
        $this->validate();
        $users = Auth::user();
        $this->category->user_id = $users->id;
        $this->category->save();
        return redirect()->route('category.index');
    }

    public function mount()
    {
        if (isset($this->category->id)) {
            $this->editMode = true;
        } else {
            $this->category = new Category();
        }
    }

    public function render()
    {
        return view('livewire.categories.category-form');
    }
}
