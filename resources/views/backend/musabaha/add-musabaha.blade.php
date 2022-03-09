
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
                <h3>Add musabaha </h3>

                	<a class="btn btn-primary float-right" href="{{route('musabaha.view')}}"><i class="fa fa-user-circle"></i>  view musabaha</a>

                
                </div>
              


              <!-- /.card-header -->
              <div class="card-body">
                
                  <form method="POST" action="{{route('musabaha.store','id')}}" id="myform" enctype="multipart/form-data">
                       
                        @csrf
                         <div class="form-group col-md-6">

	                        		<label for="title" >name</label>
	                        		<input id="title" type="text" name="name" class="form-control ">
	                        		

	                        </div>
                          <div class="form-group col-md-6">

	                        		<label for="para" >para</label>
	                        		<input id="para" type="text" name="para" class="form-control ">
	                        		

	                        </div>
                            <div class="form-group col-md-6">

                                <label for="sura" >sura</label>
                                <input id="sura" type="text" name="sura" class="form-control ">
                                

                        </div>
                        <div class="form-group col-md-6">

                            <label for="ayat" >ayat</label>
                            <input id="ayat" type="text" name="ayat" class="form-control ">
                            

                    </div>
                    <div class="form-group col-md-6">

                        <label for="description" >description</label>
                        <input id="description" type="text" name="description" class="form-control ">
                        

                </div>
                            <div class="form-group col-md-6" style="padding-top: 30px;">

	                        		<input  type="submit" value="submit" class="btn btn-primary">
                                  
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