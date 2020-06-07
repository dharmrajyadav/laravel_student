
@extends('layouts.master')
@section('title','Employees Index')
@section('content')


<div class="row">
    <div class="col-sm-12">
    <form method="post" action="{{route('test.Data')}}">
    @csrf
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

      <table class="table">
      
      <div class="form-group">
          <label for="firstname">Firstname:</label>
          <input type="text" name = "firstname" id = "firstname" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="lastname">Lastname:</label>
          <input type="text" name = "lastname" id = "lastname" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </table>
      </form>
    </div>
  </div>




@endsection


