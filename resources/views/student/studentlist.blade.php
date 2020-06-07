@extends('layouts.master')
@section('title','Employees Index')
@section('content')
  <div class="row">
    <div class="col-sm-12">
      <table class="table">
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Date Of Birth</th>
          <th>Department</th>
          <th>Phone No.</th>
          <th>State.</th>
          <th>Zip Code.</th>
          <th>Email.</th>
          <th>Password.</th>
          <th>Action.</th>
        </tr>

<?php 
    
    $studentdata = json_decode($studentdata, true);



?>


        @foreach($studentdata as $studentdata)
          <tr class = "text-center">
            <td>{{ $studentdata['id'] }}</td>
            <td>{{ $studentdata['firstname'] }}</td>
            <td>{{ $studentdata['lastname'] }}</td>
            <td>{{ $studentdata['dob'] }}</td>
            <td>{{ $studentdata['department'] }}</td>
            <td>{{ $studentdata['phone'] }}</td>
            <td>{{ $studentdata['state'] }}</td>
            <td>{{ $studentdata['zip_code'] }}</td>
            <td>{{ $studentdata['email'] }}</td>
            <td>{{ $studentdata['password'] }}</td>
            <td>
            <td> <a class="btn btn-primary" style="width: 75px;" href="{{route('user.view',['id'=>$studentdata['id']])}}">View</a>
                  <a class="btn btn-success" style="width: 75px;" href="{{route('user.update',['id'=>$studentdata['id']])}}">Update</a>
                  <a class="btn btn-danger" style="width: 75px;" href="{{route('user.delete',['id'=>$studentdata['id']])}}">Delete</a>
            </td>
           </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection
