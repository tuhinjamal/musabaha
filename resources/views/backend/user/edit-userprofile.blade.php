
@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
        


               <div class="card-header">
                <h3>Edit Profile

                	<a class="btn btn-primary float-right" href="{{route('profile.view')}}"><i class="fa fa-user-circle"></i>  view profile</a>

                </h3>
                </div>
              


              <!-- /.card-header -->
              <div class="card-body">
                
                  <form method="POST" action="{{ route('profile.update',$editData->id) }}" id="myform" enctype="multipart/form-data">
                       
                        @csrf
                        <div class="form-row">
	                        <div class="form-group col-md-4">

	                        		<label for="name" >name</label>
	                        		<input id="name" type="text" name="name" value=" {{ $editData->name}}" class="form-control ">
	                        		<font style="color: red"> {{($errors->has('name') )?($errors->first('name')):''}}</font>

	                        </div>

	                        <div class="form-group col-md-4">

	                        		<label for="email" >email</label>
	                        		<input id="email" type="email" name="email" value=" {{ $editData->email}}" class="form-control">
	                        		<font style="color: red"> {{($errors->has('email') )?($errors->first('email')):''}}</font>

	                        </div>
	                        <div class="form-group col-md-4">

	                        		<label for="phone" >phone no</label>
	                        		<input id="phone" type="text" name="phone" value=" {{ $editData->phone}}" class="form-control">
	                        		<font style="color: red"> {{($errors->has('phone') )?($errors->first('phone')):''}}</font>

	                        </div>

	                           <div class="form-group col-md-4">

	                        		<label for="address" >Address</label>
	                        		<input id="address" type="text" name="address" value=" {{ $editData->address}}" class="form-control">
	                        		<font style="color: red"> {{($errors->has('address') )?($errors->first('address')):''}}</font>

	                        </div>


                        
                        	<div class="form-group col-md-4">
                        		<label for="gender" >Gender</label>
                            	<select name="gender"  id="gender" class="form-control ">
                            		
                            	<option value=""></option>
                            	<option value="male" {{($editData->gender=="male")?"selected":""}} >male</option>
                            	<option value="female"  {{($editData->gender=="female")?"selected":""}}>female</option>

                            	</select>
                        	</div>

                        	<div class="form-group col-md-4">

                        		<label for="image">Image</label>
                        		<input type="file" name="image" class="form-control" id="image">

                        	</div>
                        	<div class="form-group col-md-2">

                        		<img id="showimage" src="{{(!empty($editData->image))?url('upload/user_images/'.$editData->image):url('upload/no_image.png')}}" style="width: 150px;height: 160px; border:1px solid #000;">

                        	</div>
	                        
                            <div class="form-group col-md-6" style="padding-top: 30px;">

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
		

  @endsection