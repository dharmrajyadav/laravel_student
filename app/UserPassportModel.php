<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPassportModel extends Model
{
    protected $fillable = ['name','email','password'];
}
