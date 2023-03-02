<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherClass extends Model
{
    use HasFactory;
    protected $fillable = [
        'darasas_id',
        'schools_id',
        'teachers_id',
        'subjects_id',
        'teacher_position'
    ];
}
