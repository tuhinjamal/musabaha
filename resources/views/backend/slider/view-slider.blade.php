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
                  Manage slider
                  
                </h3>
                @if($countslider<5)
                <a class="btn btn-success float-right btn-sm" href=" {{route('slider.add')}} "> <i class="fa fa-plus-circle"></i> Add slider</a>
                @endif
              </div><!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>SL.</th>
                        <th>slider</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $key=>$slider)
                      <tr>
                      
                        <td> {{$key+1}} </td>
                        
                      <td>Short Title</td>
                      <td> {{$slider->short_title}} </td>
                      <td>Long Title</td>
                       <td> {{$slider->long_title}} </td>
                       <td>Updated by</td>
                      <td> {{$slider->updated_by}} </td>
                      <td>Created by</td>
                      <td> {{$slider->created_by}} </td>
                        <td> <img src="{{(!empty($slider->image))?url('upload/slider_images/'.$slider->image):url('upload/noimage.png')}}" width="120px" height="130px" alt="slider"> </td>
                       
                        <td>
                   				
                   				<a title="edit" class="btn btn-primary" href="{{route('slider.edit',$slider->id)}} "><i class="fa fa-edit"></i></a>
                   				<a title="delete" id="delete" class="btn btn-danger" href=" {{route('slider.delete',$slider->id)}} "><i class="fa fa-trash"></i></a>

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