
@extends('layouts.master')
@section('title','Employees Index')
@section('content')
  <div class="row">
    <div class="col-sm-12">
      <table class="table">
      <tr>
      <th style="text-align: center;text-decoration: underline;"><h4>STUDENT Details</h4></th>
      </tr>
      
          <tr class = "text-center">
            <td>ID:</td><td><input type="text" name="id" id="id" value="{{ $studentdata->id}}" readonly></td>
            </tr>
            <tr class = "text-center">
            <td>First Name:</td><td><input type="text" name="firstname" id="firstname" value="{{ $studentdata->firstname}}"></td>
            </tr>
         
            <tr class = "text-center">
            <td>Last Name:</td><td><input type="text" name="lastname" id="lastname" value="{{ $studentdata->lastname}}"></td>
            </tr>
            <tr class = "text-center">
            <td>Date_Of_Birth:</td><td><input type="text" name="dob" id="dob" value="{{ $studentdata->dob}}"></td>
            </tr>
            <tr class = "text-center">
            <td>Department:</td><td><input type="text" name="department" id="department" value="{{ $studentdata->department}}"></td>
            </tr>
            <tr class = "text-center">
            <td>Phone:</td><td><input type="text" name="phone" id="phone" value="{{ $studentdata->phone}}"></td>
            </tr>
            <tr class = "text-center">
            <td>State:</td><td><input type="text" name="state" id="state" value="{{ $studentdata->state}}"></td>
            </tr>
            <tr class = "text-center">
            <td>Zip_Code:</td><td><input type="text" name="zip" id="zip" value="{{ $studentdata->zip_code}}"></td>
            </tr>
            <tr class = "text-center">
            <td>Email_Id:</td><td><input type="text" name="email" id="email" value="{{ $studentdata->email}}"></td>
            </tr>
            <tr class = "text-center">
            <td>Password:</td><td><input type="text" name="password" id="password" value="{{ $studentdata->password}}"></td>
            </tr>

            <tr>
            <td> <a class="btn btn-primary" style="width: 75px;" href="{{route('student.list')}}" style=" 
    position: relative; margin-left: 215px;">CLOSE</a>
                  </td> 
           </tr>
        
      </table>
    </div>
  </div>
@endsection
