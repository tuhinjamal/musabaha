
@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage contact</h1>
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
                <h3>Update contact </h3>

                	<a class="btn btn-primary float-right" href="{{route('contact.view')}}"><i class="fa fa-user-circle"></i>  view contact</a>

                
                </div>
              


              <!-- /.card-header -->
              <div class="card-body">
                
                  <form method="POST" action="{{route('contact.update',$editData->id)}}" id="myform" enctype="multipart/form-data">
                       
                        @csrf
                        <div class="form-group col-md-6">
	                        		<label for="phone" >Phone</label>
	                        		<input id="phone" type="text" name="phone" value="{{$editData->phone}} " class="form-control ">	
	                        </div>
                          <div class="form-group col-md-6">
	                        		<label for="email" >Email</label>
	                        		<input id="email" type="text" name="email" value="{{$editData->email}} " class="form-control ">	
	                        </div>
                          <div class="form-group col-md-6">
	                        		<label for="website" >website</label>
	                        		<input id="website" type="text" name="website" value="{{$editData->website}} " class="form-control ">	
	                        </div>
                          <div class="form-group col-md-6">
	                        		<label for="address" >address</label>
	                        		<input id="address" type="text" name="address" value="{{$editData->address}} " class="form-control ">	
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