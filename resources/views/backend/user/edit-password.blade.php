
@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('profile.view') }}">Home</a></li>
              <li class="breadcrumb-item active">password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-desktop"></i>
                  User list
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      
                    </li>
                    <li class="nav-item">
                      
                    </li>
                  </ul>
                </div>
              </div>


               <div class="card-header">
                <h3>Edit password

                	<a class="btn btn-primary float-right" href="#"><i class="fa fa-list"></i>User list</a>

                </h3>
                </div>
              


              <!-- /.card-header -->
              <div class="card-body">
                
                  <form method="POST" action="{{ route('password.update') }}" id="myform">
                        @csrf

                        <div class="form-row">
                        	
	                       <div class="form-group col-md-4">

	                        		<label for="current_password" >Current Password</label>
	                        		<input id="current_password" type="password" name="current_password" class="form-control">
	                        		

	                        </div>
	                        <div class="form-group col-md-4">

	                        		<label for="new_password" >New Password</label>
	                        		<input id="new_password" type="password" name="new_password" class="form-control">
	                        		

	                        </div>
	                         <div class="form-group col-md-4">

	                        		<label for="again_new_password" >Again new Password</label>
	                        		<input id="again_new_password" type="password" name="again_new_password" class="form-control">
	            
	                        </div>
                            <div class="form-group col-md-6">

	                        		<input  type="submit" value="update" class="btn btn-primary">
                                    
                               
	            
	                        </div>
	                            

                            

                         </div>
                            
                   
                       		
                    	</form>
                   
                   	                  
               
             		 </div>
                </div>


                       <!-- /.card-body -->
           		 </div>
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
	 <script type="text/javascript">
$(document).ready(function () {
  
  $('#myform').validate({
    rules: {
     
      current_password: {
        required: true,
        
      },
      new_password: {
        required: true,
        minlength: 5
      },

      again_new_password: {
        required: true,
        equalTo: '#new_password'
      },
    },
    messages: {
      current_password: {
        required: "Please enter current password",
        
      },
      new_password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      again_new_password: {
         required: "please enter confirm password",
         equalTo: "confirm password does not match"
      }
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