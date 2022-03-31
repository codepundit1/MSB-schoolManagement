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
                  @if (isset($editData))
                  <li class="breadcrumb-item active">Edit Fee Amount</li>
                  @else
                  <li class="breadcrumb-item active">Add Fee Amount</li>
                  @endif
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
                      @if (isset($editData))
                      Edit Fee Amount
                      @else
                      Add a new Fee Amount
                      @endif

                      <a href="{{route('setups.fee.amount.view')}}" class="btn btn-sm float-right btn-success"><i class="fa fa-arrow-left"></i><span class="ml-1">Back</span></a>
                    </h3>

                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                         <form action="{{(isset($editData))?route('setups.fee.amount.update', $editData->id):route('setups.fee.amount.store')}}" method="post" id="myForm">
                        @csrf
                        <div class="add_item">
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="">Fee Category</label>
                                    <select name="fee_category_id" id="" class="form-control">
                                        <option value="">Select Fee Category</option>
                                        @foreach ($fee_categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="">Student Class</label>
                                    <select name="class_id[]" id="" class="form-control">
                                        <option value="">Select Student Class</option>
                                        @foreach ($student_classes as $class)
                                         <option value="{{ $class->id }}">{{ $class->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="">Amount</label>
                                    <input type="text" name="amount[]" id="" class="form-control">
                                </div>

                                <div class="form-group col-md-1" style="padding-top: 35px;">
                                  <span class="btn btn-primary btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
                                </div>
                            </div>

                            <div class="test">
                              <h3 class="text-center">Need Validation</h3>
                            </div>
                        </div>
                        <div class="form-group col-md-4 ">
                            <button type="submit" class="btn btn-primary">{{ (isset($editData))?'Update':'Submit' }}</button>
                        </div>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
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
      <div style="visibility: hidden;">
        <div class="extra_item_add" id="extra_item_add">
          <div class="extra_item_delete" id="extra_item_delete">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="">Student Class</label>
                    <select name="class_id[]" id="" class="form-control">
                        <option value="">Select Student Class</option>
                        @foreach ($student_classes as $class)
                         <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-5">
                    <label for="">Amount</label>
                    <input type="text" name="amount[]" id="" class="form-control">
                </div>

                <div class="form-group col-md-1" style="padding-top: 35px;">
                  <div class="form-row">
                    <span class="btn btn-primary btn-sm addeventmore mr-1"><i class="fa fa-plus-circle"></i></span>
                    <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle"></i></span>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>



      <!-- Page specific script -->
      <script type="text/javascript">
        $(document).ready(function(){
            var counter = 0;
            $(document).on("click", ".addeventmore", function() {
                var extra_item_add = $("#extra_item_add").html();
                $(this).closest(".add_item").append(extra_item_add);
                counter++;
            });

            $(document).on("click", ".removeeventmore", function(event) {
                $(this).closest(".extra_item_delete").remove();
                counter -= 1;
            });
        });
  </script>


@endsection
