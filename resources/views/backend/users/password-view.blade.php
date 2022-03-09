@extends('backend.layouts.master')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Manage Profile</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Change Password</li>
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
            
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        <form action="{{route('profiles.password.update')}}" method="post" id="myForm">
                            @csrf
                            <div class="form-row">
                               

                                <div class="form-group col-md-6">
                                    <label for="old_password">Old Password</label>
                                    <input type="password" class="form-control" name="old_password" id="old_password">
                                    <font class="text-danger">{{($errors->has('old_password'))?($errors->first('old_password')):''}}</font>

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="new_password">New Password</label>
                                    <input type="password" class="form-control" name="new_password" id="new_password">
                                    <font class="text-danger">{{($errors->has('new_password'))?($errors->first('new_password')):''}}</font>

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="confirm_new_password">Confirm New Password</label>
                                    <input type="password" class="form-control" name="confirm_new_password">
                                    <font class="text-danger">{{($errors->has('confirm_new_password'))?($errors->first('confirm_new_password')):''}}</font>
                                </div>

                                <div class="form-group col-md-10">

                                    <input type="submit" value="Change" class="btn btn-primary ">
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




      <!-- Page specific script -->
          <script>
                $(function () {
                $('#myForm').validate({
                    rules: {
                        
                    old_password: {
                        required: true,
                    },

                    new_password: {
                        required: true,
                        minlength: 6
                    },
                    confirm_new_password: {
                        required: true,
                        equalTo : '#new_password'
                    },

                    },
                    messages: {

                    old_password: {
                        required: "Please provide your old password",
                        
                    },

                    new_password: {
                        required: "Please provide a new password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    confirm_new_password: {
                        required: "Please enter confirm new password",
                        equalTo : "Confirm new password doesnot match",
                    },

                    },
                    errorElement: 'span',
                    errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                    },
                    highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                    },
                    unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                    }
                });
             });
        </script>
@endsection
