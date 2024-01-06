<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Portal</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset ('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset ('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <style>
        .text-dark , table , body{
            color:black;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

     
     @include ('admin.sidebar');
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include ('admin.top_bar');

                <!-- Begin Page Content -->
                <div class="container-fluid">

    <div class="col-xl-12">  
        <div class="card mb-4">
            <div class="card-header d-flex w-100 align-items-center justify-content-between">Edit Details
            <a href=""><button class="btn btn-primary d-flex ">Back</button></a>
            </div>
             
                <div class="card-body">
                <form action="{{ url('admin/order/update/' .$product->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
                    <div class="col-xl-10">
                        <div class="mb-3"><label for="exampleFormControlInput1">Customer Name: </label><input value="{{$product->fullname}}" class="form-control form-control-solid" id="exampleFormControlInput1" type="text" name="name" readonly></div>
                    
                        <div class="mb-3"><label for="exampleFormControlInput1">Contact: </label><input value="{{$product->contact}}" class="form-control form-control-solid" id="exampleFormControlInput1" type="text"  readonly></div>
                        <div class="mb-3"><label for="exampleFormControlInput1">Date: </label><input value="{{$product->date}}" class="form-control form-control-solid" id="exampleFormControlInput1" type="text"  readonly></div>

                        <div class="mb-3"><label for="exampleFormControlInput1">Time: </label><input value="{{$product->time}}" class="form-control form-control-solid" id="exampleFormControlInput1" type="text"  readonly></div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Status: </label><select class="form-control form-control-solid" name="status" id="exampleFormControlSelect1" required>
                                <option value="Pending" {{ $product->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Received" {{ $product->status == 'Received' ? 'selected' : '' }}>Received</option>
                                <option value="On the Process" {{ $product->status == 'On the Process' ? 'selected' : '' }}>On the Process</option>
                                <option value="Settle" {{ $product->status == 'Settle' ? 'selected' : '' }}>Settle</option>
                                <option value="Rejected" {{ $product->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </div>




                       
                        <button class="mt-4 btn btn-primary" name="submit" type="submit">Update Service</button>
                    </form>
                </div>
            </div>
        </div>    <!-- End of Main Content -->
    </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset ('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset ('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset ('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset ('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset ('js/demo/datatables-demo.js')}}"></script>

    <script>
    $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});</script>


</script>


</body>

</html>