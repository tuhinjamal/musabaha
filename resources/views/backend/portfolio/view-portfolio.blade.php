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
                  Manage portfolio
                  
                </h3>
                @if($countPortfolio<9)
                <a class="btn btn-success float-right btn-sm" href=" {{route('portfolio_a.add')}} "> <i class="fa fa-plus-circle"></i> Add portfolio</a>
                @endif
              </div><!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>SL.</th>
                        <th>portfolio</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $key=>$portfolio)
                      <tr>
                      
                        <td> {{$key+1}} </td>
                        
                      <td>Short Title</td>
                      <td> {{$portfolio->short_title}} </td>
                      <td>Long Title</td>
                       <td> {{$portfolio->long_title}} </td>
                       <td>Updated by</td>
                      <td> {{$portfolio->updated_by}} </td>
                      <td>Created by</td>
                      <td> {{$portfolio->created_by}} </td>
                        <td> <img src="{{(!empty($portfolio->image))?url('upload/portfolio_images/'.$portfolio->image):url('upload/noimage.png')}}" width="120px" height="130px" alt="portfolio"> </td>
                       
                        <td>
                   				
                   				<a title="edit" class="btn btn-primary" href="{{route('portfolio_a.edit',$portfolio->id)}} "><i class="fa fa-edit"></i></a>
                   				<a title="delete" id="delete" class="btn btn-danger" href=" {{route('portfolio_a.delete',$portfolio->id)}} "><i class="fa fa-trash"></i></a>

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