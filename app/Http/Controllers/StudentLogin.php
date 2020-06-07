<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentLogin extends Controller
{


        public function index()
        {
            return view('student.studentLogin');
        }

        public function loginCheck(Request $request)
        {
            echo $email=$request->input('email_address');
            echo $password=$request->input('password');
            

        }


}
