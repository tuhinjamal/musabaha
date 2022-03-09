
@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage musabaha</h1>
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
                <h3>Update musabaha </h3>

                	<a class="btn btn-primary float-right" href="{{route('musabaha.view')}}"><i class="fa fa-user-circle"></i>  view musabaha</a>

                
                </div>
              


              <!-- /.card-header -->
              <div class="card-body">
                
                  <form method="POST" action="{{route('musabaha.update',$editData->id)}}" id="myform" enctype="multipart/form-data">
                       
                        @csrf
                        <div class="form-group col-md-6">

	                        		<label for="title" >name</label>
	                        		<input id="title" type="text" name="name" value="{{$editData->name}} " class="form-control ">
	                        		

	                        </div>
                          <div class="form-group col-md-6">

	                        		<label for="musabaha" > Para</label>
	                        		<input id="musabaha" type="text" name="para" value=" {{$editData->para}} "class="form-control ">
	                        		

	                        </div>
                            <div class="form-group col-md-6">

                                <label for="musabaha" > sura</label>
                                <input id="musabaha" type="text" name="sura" value=" {{$editData->sura}} "class="form-control ">
                                

                        </div>
                        <div class="form-group col-md-6">

                            <label for="musabaha" > ayat</label>
                            <input id="musabaha" type="text" name="ayat" value=" {{$editData->ayat}} "class="form-control ">
                            

                    </div>
                    <div class="form-group col-md-6">

                        <label for="musabaha" > description</label>
                        <input id="musabaha" type="text" name="description" value=" {{$editData->description}} "class="form-control ">
                        

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