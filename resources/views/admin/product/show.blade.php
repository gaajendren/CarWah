<?php include '../admin_sesion.php'?>
<?php include 'controllers.php' ?>
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
    <link href="{{asset ('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="{{ asset ('css/sb-admin-2.min.css')}}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.css')" rel="stylesheet">

    <style>
        .text-dark , table , body{
            color:black;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

     
      <?php include '../sidebar.php' ?>
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php include '../top_bar.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

    <div class="col-xl-12">  
        <div class="card mb-4">
            <div class="card-header d-flex w-100 align-items-center justify-content-between">Product Details
            <a href="<?php echo $list_product ?>"><button class="btn btn-primary d-flex ">Back</button></a>
            </div>
                <?php $data = show($_GET['id']) ?>
                <div class="card-body">
                  
                    <div class="col-xl-10">
                              
                                <img src="<?php echo $product_image . $data['img'] ?>" alt="Previous Image" class="" style="max-width: 200px;">
   
                                <hr class="h-15" style="height: 5px;">
                                <label for="">Details</label>
                                <hr style="height: 5px;">
                        <div class="mt-4 mb-3"><label for="exampleFormControlInput1">Product Name: <?php echo $data['prd_name'] ?></label></div>
                        <div class="mb-3"><label for="exampleFormControlInput2">Product Price: <?php echo $data['prd_price'] ?></label></div>
                        <div class="mb-3"><label for="exampleFormControlInput3">Quantity: <?php echo $data['prd_quantity'] ?></label></div>
                               
                        <div class="mb-3">
                        <label for="exampleFormControlInput5">Resolution: <?php echo $data['brand']; ?> </label>
                    
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput5">Resolution: <?php echo $data['resolution'] ?></label></div>
                        <div class="mb-3"><label for="exampleFormControlInput4">Availability: <?php echo $data['warranthy'] ?></label></div>
                        <div class="mb-0"><label for="exampleFormControlTextarea1">Description: <?php echo $data['description'] ?></label></div>       
                       
                   
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
                    <a class="btn btn-warning"  href="logout.php">Logout</a>
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
</body>

</html>