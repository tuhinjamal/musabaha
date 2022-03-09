@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
 
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-user mr-1"></i>
                  Add User 
                  
                </h3>
                <a class="btn btn-success float-right btn-sm" href=" {{route('users.view')}} "> <i class="fa fa-list"></i> View User</a>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{route('users.store')}}" id="myform">
                        @csrf

                        <div class="form-row">
                        	<div class="form-group col-md-4">
                        		<label for="usertype" >User Role</label>
                            	<select name="usertype"  id="usertype" class="form-control  required">
                            		
                            	<option value=""></option>
                            	<option value="1">Admin</option>
                            	<option value="0">User</option>

                            	</select>
                        	</div>
	                        <div class="form-group col-md-4">

	                        		<label for="name" >name</label>
	                        		<input id="name" type="text" name="name" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('name') )?($errors->first('name')):''}}</font>

	                        </div>

	                        <div class="form-group col-md-4">

	                        		<label for="email" >email</label>
	                        		<input id="email" type="email" name="email" class="form-control" required>
	                        		<font style="color: red"> {{($errors->has('email') )?($errors->first('email')):''}}</font>

	                        </div>
	                        <div class="form-group col-md-4">

	                        		<label for="password" >Password</label>
	                        		<input id="password" type="password" name="password" id="password" class="form-control" required>
	                        		

	                        </div>
	                         <div class="form-group col-md-4">

	                        		<label for="password-confirm" >Confirm Password</label>
	                        		<input id="password-confirm" type="password" name="password2" class="form-control" required>
	            
	                        </div>
                            <div class="form-group col-md-6">

	                        		<input  type="submit" value="submit" class="btn btn-primary">
                                    
                               
	            
	                        </div>
	                            

                            

                         </div>
                            
                   
                       		
                    	</form>
            </div>
                    
            <!-- /.card -->

            <!-- DIRECT CHAT -->
 
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            
            <!-- /.card -->

            <!-- solid sales graph -->

            <!-- /.card -->

            <!-- Calendar -->
            
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Page specific script -->
<script>
$(function () {
  $('#myform').validate({
    rules: {
      usertype: {
        required: true,
        
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      password: {
        required: true,
        equalTo: '#password'
      },
      terms: {
        required: true
      },
    },
    messages: {
        usertype: {
        required: "Please select usertype ",
       
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      password2: {
        required: "Please provide same password",
        equalTo: "Confirm password does not match "
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

  @endsection