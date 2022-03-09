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
                  Manage musabaha
                  
                </h3>
                @if($countmusabaha<1)
                <a class="btn btn-success float-right btn-sm" href=" {{route('musabaha.add')}} "> <i class="fa fa-plus-circle"></i> Add musabaha</a>
                @endif
              </div><!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>SL.</th>
                        <th>musabaha</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $key=>$musabaha)
                      <tr>
                      
                        <td> {{$key+1}} </td>
                        
                      <td>Name</td>
                      <td> {{$musabaha->name}} </td>
                      <td>para</td>
                       <td> {{$musabaha->para}} </td>
                       <td>sura</td>
                       <td> {{$musabaha->sura}} </td>
                       <td>ayat</td>
                       <td> {{$musabaha->ayat}} </td>
                       <td>description</td>
                       <td> {{$musabaha->description}} </td>
                       <td>
                   				<a title="edit" class="btn btn-primary" href="{{route('musabaha.edit',$musabaha->id)}} "><i class="fa fa-edit"></i></a>
                   			  <a title="delete" id="delete" class="btn btn-danger" href=" {{route('musabaha.delete',$musabaha->id)}} "><i class="fa fa-trash"></i></a>

                   			</td>
                      </tr>
                      @endforeach
                    </tbody>
                    </table>
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
  @endsection