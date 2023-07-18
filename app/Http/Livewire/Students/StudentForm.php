<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StudentForm extends Component
{
    public Student $student;
    public $editMode = false;

    protected $rules = [
        'student.name' => 'nullable|max:255',
        'student.phone' => 'nullable|max:255',
        'student.gender' => 'nullable|max:255',
        'student.email' => 'nullable|max:255',
        'student.address' => 'nullable|max:255',
        'student.class' => 'nullable|max:255',
        'student.age' => 'nullable|max:255',
    ];

    public function save()
    {
        $this->validate();
        $users = Auth::user();
        $this->student->user_id = $users->id;
        $this->student->save();
        return redirect()->route('student.index');
    }

    public function mount()
    {
        if (isset($this->student->id)) {
            $this->editMode = true;
        } else {
            $this->student = new Student();
        }
    }

    public function render()
    {
        return view('livewire.students.student-form');
    }
}
