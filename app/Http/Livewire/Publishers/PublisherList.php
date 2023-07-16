<?php

namespace App\Http\Livewire\Publishers;

use App\Models\Publisher;
use Livewire\Component;

class PublisherList extends Component
{
    public Publisher $publisher;
    public $editMode = false;


    public function edit(Publisher $publisher)
    {
        $this->publisher = $publisher;
        $this->editMode = true;
        return redirect()->route('publisher.edit', $this->publisher->id);
    }

    public function render()
    {
        $publishers = Publisher::all();
        return view('livewire.publishers.publisher-list', compact('publishers'));
    }
}
