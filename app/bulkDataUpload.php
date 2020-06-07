<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class bulkDataUpload extends Model
{
    public static function insertData($data){

        $value=DB::table('student_list')->where('firstname', $data['firstname'])->get();
        if($value->count() == 0){
           DB::table('student_list')->insert($data);
        }
     }


}
