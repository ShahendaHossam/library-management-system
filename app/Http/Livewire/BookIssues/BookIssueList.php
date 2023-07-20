<?php

namespace App\Http\Livewire\BookIssues;

use App\Models\BookIssue;
use Livewire\Component;

class BookIssueList extends Component
{
    public BookIssue $book_issue;
    public $editMode = false;


    public function edit(BookIssue $book_issue)
    {
        $this->book_issue = $book_issue;
        $this->editMode = true;
        return redirect()->route('book_issue.edit', $this->book_issue->id);
    }

    public function render()
    {
        $book_issues = BookIssue::all();
        return view('livewire.book-issues.book-issue-list',compact('book_issues'));
    }
}
