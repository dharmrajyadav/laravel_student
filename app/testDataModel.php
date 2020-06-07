<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testDataModel extends Model
{
    protected $table = 'testdata';
    protected $fillable = ['firstname','lastname'];
}
