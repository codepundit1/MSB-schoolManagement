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
                  <li class="breadcrumb-item active">Add User</li>
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

                      User List
                      <a href="{{route('users.view')}}" class="btn btn-sm float-right btn-success"><i class="fa fa-arrow-left"></i><span class="ml-1">Back</span></a>
                    </h3>

                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        <form action="{{route('users.store')}}" method="post" id="myForm">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="userType">User Role</label>
                                    <select name="userType" id="userType" class="form-control">
                                        <option value="">Select Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name">
                                    <font class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email">
                                    <font class="text-danger">{{($errors->has('email'))?($errors->first('email')):''}}</font>


                                </div>

                                <div class="form-group col-md-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                    <font class="text-danger">{{($errors->has('password'))?($errors->first('password')):''}}</font>

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password">
                                    <font class="text-danger">{{($errors->has('confirm_password'))?($errors->first('confirm_password')):''}}</font>
                                </div>

                                <div class="form-group col-md-6">

                                    <input type="submit" value="submit" class="btn btn-primary ">
                                </div>


                            </div>
                        </form>

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
