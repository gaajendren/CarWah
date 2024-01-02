
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
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .text-dark , table , body{
            color:black;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

     
     @include('admin.sidebar')
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('admin.top_bar')
           

                <!-- Begin Page Content -->
                <div class="container-fluid">

    <div class="col-xl-12">  
        <div class="card mb-4">
            <div class="card-header d-flex w-100 align-items-center justify-content-between">Service Details
            <a href=""><button class="btn btn-primary d-flex ">Back</button></a>
            </div>
                <div class="card-body">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                      {!! csrf_field() !!}
                    <div class="col-xl-10">
                                <label for="">Service Picture</label>
                                <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="img" required>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                    <div class="mb-3 small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>

   
                        <div class="mb-3"><label for="exampleFormControlInput1">Service Name: </label><input class="form-control form-control-solid" id="exampleFormControlInput1" type="text" name="name" placeholder="Your Service Name" required></div>
                        <div class="mb-3"><label for="exampleFormControlInput2">Service Price: </label><input class="form-control form-control-solid" id="exampleFormControlInput2" type="number" name="price" placeholder="Service Price" required></div>

                        <div class="mb-3">
                            <label for="vechicle">Vechicle Type: </label><select class="form-control form-control-solid" oninput="updateDuration()" name="vechicle_id" id="vechicle" required>
                               @foreach ($vechicle as $val)
                               <option value="{{$val->id}}">{{$val->name}}</option>
                               @endforeach
                            </select>
                        </div>

                        <div id="duration-input"></div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Availability: </label><select class="form-control form-control-solid" name="avalaibility" id="exampleFormControlSelect1" required>
                                <option value="0">Available</option>
                                <option value="1">Not Available</option>
                            </select>
                        </div>

                      
            
                        <div class="mb-0"><label for="exampleFormControlTextarea1">Description:</label><textarea class="form-control form-control-solid" id="exampleFormControlTextarea1" name="description" rows="3"></textarea></div>  <br>  
                        <div class="mb-0"><label for="exampleFormControlTextarea3">Service Details (Please put '/n' for new line):</label><textarea class="form-control form-control-solid" id="exampleFormControlTextarea3" name="service" rows="5"></textarea></div>          
                        <button class="mt-4 btn btn-primary" name="submit" type="submit">Add Service</button>
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


    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>


    <script src="../js/sb-admin-2.min.js"></script>


    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="../js/demo/datatables-demo.js"></script>
    <script>
    $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});</script>



<script>
    function updateDuration(){
        var selectedVechicle = $('#vechicle').val();

       $.ajax({
            type: 'GET',
            url: '/get-duration-vechicle/' + selectedVechicle,
            headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            success: function(response) {
                console.log('Response:', typeof response);
                console.log('id:', selectedVechicle);
                if (response == 0) {
                   
                    $('#duration-input').html('<div class="mb-3"><label for="exampleFormControlInput3">Duration( 1 for 1 hour): </label><input class="form-control form-control-solid" id="exampleFormControlInput3" type="number" name="duration" placeholder="1" required></div>');
                } else if (response == 1) {
                    
                    $('#duration-input').html('<div class="mb-3"><label for="exampleFormControlInput3">Duration Estimation: </label><input class="form-control form-control-solid" id="exampleFormControlInput3" type="text" name="duration_es" placeholder="Example 1 hour 30 minutes" required></div>');
                }

            },
            error: function(error) {
                console.error('Error fetching available time slots:', error);
            }
        });
    }
</script>
</body>

</html>