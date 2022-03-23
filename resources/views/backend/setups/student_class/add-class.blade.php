@extends('backend.layouts.master')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Manage Class</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Add Class</li>
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

                      Add a new Class
                      <a href="{{route('setups.student.class.view')}}" class="btn btn-sm float-right btn-success"><i class="fa fa-arrow-left"></i><span class="ml-1">Back</span></a>
                    </h3>

                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        <form action="{{route('setups.student.class.store')}}" method="post" id="myForm">
                            @csrf
                            <div class="form-row">


                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name">
                                    <font class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                </div>



                                <div class="form-group col-md-7">

                                    <input type="submit" value="Submit" class="btn btn-primary ">
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
                //   $.validator.setDefaults({
                //     submitHandler: function () {
                //       alert( "Form successful submitted!" );
                //     }
                //   });
                $('#myForm').validate({
                    rules: {



                    name: {
                        required: true,
                    },

                    },
                    messages: {



                    name: {
                        required: "Please Enter Usernam",
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
