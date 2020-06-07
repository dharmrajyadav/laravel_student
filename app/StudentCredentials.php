<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCredentials extends Model
{
    protected $table = 'student_credentials';
    protected $fillable = ['email','password'];
}
