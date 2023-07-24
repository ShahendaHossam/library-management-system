<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class StudentList extends Component
{
    public Student $student;
    public $editMode = false;


    public function edit(Student $student)
    {
        $this->student = $student;
        $this->editMode = true;
        return redirect()->route('student.edit', $this->student->id);
    }

    public function render()
    {
        $students = Student::all();
        return view('livewire.students.student-list',compact('students'));
    }
}
