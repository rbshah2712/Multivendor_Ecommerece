<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rukada/color-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 15:04:08 GMT -->
<head>
  <meta charset="utf-8"/> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>AdminDashboard</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('adminbackend/assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{asset('adminbackend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('adminbackend/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('adminbackend/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('adminbackend/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('adminbackend/assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('adminbackend/assets/css/app-style.css')}}" rel="stylesheet"/>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="{{asset('adminbackend/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('adminbackend/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link href="{{asset('adminbackend/assets/plugins/inputtags/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
  @include('admin.body.sidebar')
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
@include('admin.body.header')
<!--End topbar header-->


<div class="content-wrapper">
    <div class="container-fluid">
  <!--End wrapper-->
        @yield('admin')
</div>
</div>
<!--Start footer-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
@include('admin.body.footer');
<!--End footer-->

</div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('adminbackend/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('adminbackend/assets/js/jquery.validate.js')}}"></script>
  <script src="{{asset('adminbackend/assets/js/popper.min.js')}}"></script>
  <script src="{{asset('adminbackend/assets/js/bootstrap.min.js')}}"></script>
	
  <!-- simplebar js -->
  <script src="{{asset('adminbackend/assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{asset('adminbackend/assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('adminbackend/assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('adminbackend/assets/js/app-script.js')}}"></script>
  <!-- Chart js -->
  <script src="{{asset('adminbackend/assets/plugins/Chart.js/Chart.min.js')}}"></script>
  <!--Peity Chart -->
  <script src="{{asset('adminbackend/assets/plugins/peity/jquery.peity.min.js')}}"></script>
  <!-- Index js -->
  
  
  <script src="{{asset('adminbackend/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('adminbackend/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminbackend/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="{{asset('adminbackend/assets/plugins/inputtags/js/bootstrap-tagsinput.js')}}"></script>


  <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
       case 'info':
       toastr.info(" {{ Session::get('message') }} ");
       break;
   
       case 'success':
       toastr.success(" {{ Session::get('message') }} ");
       break;
   
       case 'warning':
       toastr.warning(" {{ Session::get('message') }} ");
       break;
   
       case 'error':
       toastr.error(" {{ Session::get('message') }} ");
       break; 
    }
    @endif 
    </script>
     <script>
      $(document).ready(function() {
       //Default data table
        $('#default-datatable').DataTable();
       
      });
     </script>  
     <script src="{{asset('adminbackend/assets/plugins/alerts-boxes/js/sweetalert.min.js')}}"></script>
  <script src="{{asset('adminbackend/assets/plugins/alerts-boxes/js/sweet-alert-script.js')}}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
      $(function(){
    $(document).on('click','#delete', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            let link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure ?',
                text: "You won't be able to revert this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                   window.location.href = link;
                   Swal.fire('Deleted!','Your File has been deleted.','success')
                }
            })
        })
    });


    $(function(){
    $(document).on('click','#confirm', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            let link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure to confirm?',
                text: "You won't be able to revert this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, confirm it!'
            }).then((result) => {
                if (result.isConfirmed) {
                   window.location.href = link;
                   Swal.fire('Confirmed!','Your Order is confirmed.','success')
                }
            })
        })
    });


    $(function(){
    $(document).on('click','#processing', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            let link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure to Process?',
                text: "You won't be able to revert this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Process it!'
            }).then((result) => {
                if (result.isConfirmed) {
                   window.location.href = link;
                   Swal.fire('Processed!','Your Order is Processed.','success')
                }
            })
        })
    });


    $(function(){
    $(document).on('click','#delivered', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            let link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure to Deliver?',
                text: "You won't be able to revert this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Deliver it!'
            }).then((result) => {
                if (result.isConfirmed) {
                   window.location.href = link;
                   Swal.fire('Delivered!','Your Order is Delivered.','success')
                }
            })
        })
    });


    $(function(){
    $(document).on('click','#approved', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            let link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure to Approve?',
                text: "You won't be able to revert this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Deliver it!'
            }).then((result) => {
                if (result.isConfirmed) {
                   window.location.href = link;
                   Swal.fire('Approved!','Your Return Order is Approved.','success')
                }
            })
        })
    });
      
      </script>
      <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
      </script>
      
      <script>
          tinymce.init({
            selector: '#mytextarea'
          });
      </script>
</body>

<!-- Mirrored from codervent.com/rukada/color-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 15:04:09 GMT -->
</html>
