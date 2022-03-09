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
                  <li class="breadcrumb-item active">Profile</li>
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

                      Edit Profile
                      <a href="{{route('profiles.view')}}" class="btn btn-sm float-right btn-success"><i class="fa fa-arrow-left"></i><span class="ml-1">Back</span></a>
                    </h3>

                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        <form action="{{route('profiles.update')}}" method="post" id="myForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" value="{{$editData->name}}" name="name">
                                    <font class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value="{{$editData->email}}" name="email">
                                    <font class="text-danger">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                                </div>

                                <div class="form-group col-md-4">
                                  <label for="mobile">Mobile</label>
                                  <input type="text" class="form-control" value="{{$editData->mobile}}" name="mobile">
                                  <font class="text-danger">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                                </div>

                                <div class="form-group col-md-6">
                                  <label for="gender">Gender</label>
                                  <select name="gender" id="gender" class="form-control">
                                      <option value="">Select Gender</option>
                                      <option value="Male" {{($editData->gender == "Male")?"selected":""}}>Male</option>
                                      <option value="Female" {{($editData->gender == "Female")?"selected":""}}>Female</option>
                                  </select>
                               </div>

                              <div class="form-group col-md-6">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control " id="image">
                              </div>
                              
                              <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" value="{{$editData->address}}">
                              </div>

                              <div class="form-group col-md-4 ">
                                <img id="showImage"  src="{{(!empty($editData->image)?url('upload/user_images/'. $editData->image):url('upload/user_images/admin.png'))}}" alt="" style="height: 90px; width:90px; border:1px solid gray;">
                              </div>
                              
                                <div class="form-group col-md-6" >

                                    <input type="submit" value="update" class="btn btn-primary ">
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

                    userType: {
                        required: true,

                    },

                    name: {
                        required: true,
                    },

                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    confirm_password: {
                        required: true,
                        equalTo : '#password'
                    },

                    },
                    messages: {

                    userType: {
                        required: "Please select user Role",

                    },

                    name: {
                        required: "Please Enter Usernam",
                    },

                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a <em>valid</em> email address"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    confirm_password: {
                        required: "Please enter confirm password",
                        equalTo : "Confirm password doesnot match",
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
