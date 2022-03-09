
@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage portfolio_a</h1>
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
                <h3>Update portfolio_a </h3>

                	<a class="btn btn-primary float-right" href="{{route('portfolio_a.view')}}"><i class="fa fa-user-circle"></i>  view portfolio_a</a>

                
                </div>
              


              <!-- /.card-header -->
              <div class="card-body">
                
                  <form method="POST" action="{{route('portfolio_a.update',$editData->id)}}" id="myform" enctype="multipart/form-data">
                       
                        @csrf
                        <div class="form-group col-md-6">

	                        		<label for="short_title" >Short title</label>
	                        		<input id="short_title" type="text" name="short_title" value="{{$editData->short_title}} " class="form-control ">
	                        		

	                        </div>
                          <div class="form-group col-md-6">

	                        		<label for="long_title" >Long title</label>
	                        		<input id="long_title" type="text" name="long_title" value=" {{$editData->long_title}} "class="form-control ">
	                        		

	                        </div>
                        	<div class="form-group col-md-4">

                        		<label for="image">Image</label>
                        		<input type="file" name="image" class="form-control" id="image">

                        	</div>
                        	<div class="form-group col-md-2">

                        		<img id="showimage" src="{{(!empty($editData->image))?url('upload/portfolio_images/'.$editData->image):url('upload/no_image.png')}}" style="width: 150px;height: 160px; border:1px solid #000;">

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