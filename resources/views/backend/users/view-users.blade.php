@extends('backend.layouts.master')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Manage User</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">User List</li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">

            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <section class="col-md-12">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                  <div class="card-header">
                    <h3>
                      <i class="fas fa-user mr-2"></i>
                      User List
                      <a href="#" class="btn btn-sm float-right btn-success"><span class="mr-1">Add</span><i class="fa fa-plus-circle"></i></a>
                    </h3>
                   
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                              <th>SI.</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Role</th>
                              <th>Action</th>
                              
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($allData as $key=> $user )
                            <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td></td>
                              <td>btn</td>
                              
                          </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="tab-content p-0">
                      <!-- Morris chart - Sales -->
                      <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px">
                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px"></canvas>
                      </div>
                      <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px">
                        <canvas id="sales-chart-canvas" height="300" style="height: 300px"></canvas>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->



                <!-- /.card -->
              </section>
              <!-- /.Left col -->

            </div>
            <!-- /.row (main row) -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->


@endsection
