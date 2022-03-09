<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MSB | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
      <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" {{asset('backend')}}/plugins/fontawesome-free/css/all.min.css" />

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href=" {{asset('backend')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
  <!-- iCheck -->
  <link rel="stylesheet" href=" {{asset('backend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- JQVMap -->
  <link rel="stylesheet" href=" {{asset('backend')}}/plugins/jqvmap/jqvmap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{asset('backend')}}/dist/css/adminlte.min.css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href=" {{asset('backend')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href=" {{asset('backend')}}/plugins/daterangepicker/daterangepicker.css" />
  <!-- summernote -->
  <link rel="stylesheet" href=" {{asset('backend')}}/plugins/summernote/summernote-bs4.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

      <!-- jQuery -->
    <script src=" {{asset('backend')}}/plugins/jquery/jquery.min.js"></script>

    <style type="text/css">
        .notifyjs-corner{
            z-index: 99999 !important;
        }
    </style>
    {{-- Notify --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- sweetAlert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" />
    </div>



    @include('backend.layouts.header')

    @include('backend.layouts.sidebar')

    @yield('content')

    @include('backend.layouts.footer')


    @if (session()->has('success'))
        <script>
            $(function(){
                $.notify("{{session()->get('success')}}", {globalPosition: 'top right', className:'success'});
            })
        </script>
    @endif

    @if (session()->has('error'))
    <script>
        $(function(){
            $.notify("{{session()->get('error')}}", {globalPosition: 'top right', className:'error'});
        })
    </script>
@endif

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <script>
    $.widget.bridge("uibutton", $.ui.button);
  </script>

  <!-- jQuery UI 1.11.4 -->
  <script src=" {{asset('backend')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <!-- Bootstrap 4 -->
  <script src=" {{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src=" {{asset('backend')}}/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src=" {{asset('backend')}}/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src=" {{asset('backend')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src=" {{asset('backend')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src=" {{asset('backend')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src=" {{asset('backend')}}/plugins/moment/moment.min.js"></script>
  <script src=" {{asset('backend')}}/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src=" {{asset('backend')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src=" {{asset('backend')}}/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src=" {{asset('backend')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src=" {{asset('backend')}}/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src=" {{asset('backend')}}/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src=" {{asset('backend')}}/dist/js/pages/dashboard.js"></script>

  <!-- jquery-validation -->
    <script src=" {{asset('backend')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src=" {{asset('backend')}}/plugins/jquery-validation/additional-methods.min.js"></script>

  <!-- DataTables  & Plugins -->
  <script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="{{asset('backend')}}/plugins/jszip/jszip.min.js"></script>
  <script src="{{asset('backend')}}/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="{{asset('backend')}}/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <script>
      $(function(){
          $(document).on('click', '#delete', function(e){
              e.preventDefault();
              var link = $(this).attr("href");
              Swal.fire({
                title: 'Are you sure?',
                text: "Delete this data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
                })
          })
      })
  </script>


    {{-- image upload and show it  --}}
    <script type="text/javascript">
      $(document).ready(function(){
        $('#image').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
            $('#showImage').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
        });
      });
    </script>
</body>

</html>
