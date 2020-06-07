@extends('layouts.master')
@section('title','Create Student')
@section('content')
  <div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('student.store')}}" method = "post">
        @csrf

        <div class="header">
            <h4 style="text-decoration: underline;color: #007bff;">Create Student</h4>
            
        </div>

        <div class="form-group">
          <label for="firstname">Firstname:</label>
          <input type="text" name = "firstname" id = "firstname" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="lastname">Lastname:</label>
          <input type="text" name = "lastname" id = "lastname" class="form-control" required>
        </div>
        
       <div class="form-group">
          <label for="dob">Date Of Birth:</label>
          <input type="text" name = "dob" id = "dob" class="form-control" placeholder="YYYY/MM/DD" >
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
        </div> 
       
        <div class="form-group">
          <label for="department">Department:</label>
          <input type="text" name = "department" id = "department" class="form-control"  >
        </div>
        


        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="text" name = "phone" id = "phone" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="department">State/City:</label>
         <input type="text" name = "state" id = "tate" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="zip">Zip_Code:</label>
          <input type="text" name = "zipcode" id = "zipcode" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email_Id:</label>
          <input type="text" name = "email" id = "email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="text" name = "password" id = "password" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection



<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>





  $(document).ready(function(){
          $.ajax({

              url:'/departmentList',
              success:function(data)
              {
                var jsonDept=JSON.parse(data);

              }



          });


  });


</script> -->
