@extends('backend.layouts.master')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Manage Fee Category Amount</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Fee Amount</li>
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

                        Fee Amount List
                      <a href="{{route('setups.fee.amount.add')}}" class="btn btn-sm float-right btn-success"><span class="mr-1">Add Fee Amount</span><i class="fa fa-plus-circle"></i></a>
                    </h3>

                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                              <th>SI.</th>
                              <th>Fee Amount</th>
                              <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($allData as $key=> $data )
                            <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$data['fee_category'] ['name']}}</td>
                              <td>
                                  <a title="edit" class="mr-1" href="{{route('setups.fee.amount.edit', $data->fee_category_id)}}"><i class="fa fa-edit "></i></a>
                                  {{-- <a title="delete" id="delete" href="{{route('setups.fee.amount.delete', $data->id)}}"><i class="fa fa-trash "></i></a> --}}
                              </td>

                          </tr>
                            @endforeach
                        </tbody>
                    </table>

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
