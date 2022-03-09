
@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage about</h1>
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
                <h3>Update about </h3>

                	<a class="btn btn-primary float-right" href="{{route('about.view')}}"><i class="fa fa-user-circle"></i>  view about</a>

                
                </div>
              


              <!-- /.card-header -->
              <div class="card-body">
                
                  <form method="POST" action="{{route('about.update',$editData->id)}}" id="myform" enctype="multipart/form-data">
                       
                        @csrf
                        <div class="form-group col-md-6">

	                        		<label for="title" >Short title</label>
	                        		<input id="title" type="text" name="title" value="{{$editData->title}} " class="form-control ">
	                        		

	                        </div>
                          <div class="form-group col-md-6">

	                        		<label for="about" > About</label>
	                        		<input id="about" type="text" name="about" value=" {{$editData->about}} "class="form-control ">
	                        		

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