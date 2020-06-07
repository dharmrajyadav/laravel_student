<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = 'student_list';
    protected $fillable = ['id','firstname','lastname','dob', 'department','phone','state','zip_code','email','password'];

}
