<?php

namespace App\Http\Livewire\Publishers;

use App\Models\Publisher;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PublisherForm extends Component
{
    public Publisher $publisher;
    public $editMode = false;

    protected $rules = [
        'publisher.publisher_name' => 'nullable|max:255',
        'publisher.publisher_email' => 'nullable|max:255',
        'publisher.publisher_address' => 'nullable|max:255',
        'publisher.publisher_phone' => 'nullable|max:255',
    ];

    public function save()
    {
        $this->validate();
        $users = Auth::user();
        $this->publisher->user_id = $users->id;
        $this->publisher->save();
        return redirect()->route('publisher.index');
    }

    public function mount()
    {
        if (isset($this->publisher->id)) {
            $this->editMode = true;
        } else {
            $this->publisher = new Publisher();
        }
    }

    public function render()
    {
        return view('livewire.publishers.publisher-form');
    }
}
