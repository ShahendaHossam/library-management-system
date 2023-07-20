<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookIssue extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'book_id',
        'phone',
        'email',
        'issue_date',
        'return_date',
        'status',
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
