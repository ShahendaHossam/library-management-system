<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{
    public Category $category;
    public $editMode = false;


    public function edit(Category $category)
    {
        $this->category = $category;
        $this->editMode = true;
        return redirect()->route('category.edit', $this->category->id);
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.categories.category-list', compact('categories'));
    }
}
