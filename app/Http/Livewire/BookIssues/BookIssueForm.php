<?php

namespace App\Http\Livewire\BookIssues;

use App\Models\Book;
use App\Models\BookIssue;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BookIssueForm extends Component
{
    public BookIssue $book_issue;
    public Student $student;
    public $editMode = false;

    protected $rules = [
        'book_issue.student_id' => 'nullable|max:255',
        'book_issue.book_id' => 'nullable|max:255',
        'book_issue.return_date' => 'nullable|max:255',
        'book_issue.status' => 'nullable|max:255',
    ];

    public function save()
    {
        $this->validate();
        $users = Auth::user();
        $this->book_issue->user_id = $users->id;
        $this->book_issue->status = 'Issued';

        $this->book_issue->save();
        return redirect()->route('book_issue.index');
    }

    public function mount()
    {
        if (isset($this->book_issue->id)) {
            $this->editMode = true;
        } else {
            $this->book_issue = new BookIssue();
            $this->student = new Student();
        }
    }

    public function render()
    {
        $students = Student::all();
        $books = Book::all();
        return view('livewire.book-issues.book-issue-form', compact(['students', 'books']));
    }
}
