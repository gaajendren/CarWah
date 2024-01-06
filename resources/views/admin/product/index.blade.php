<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://kit.fontawesome.com/ff3606fe13.js" crossorigin="anonymous"></script>
    <title>Admin Portal</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset ('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset ('css/sb-admin-2.min.css')}}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{ asset ('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-black-800">Service</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-9" style="display:flex; align-items:center;">
                                     <h6 class="m-0 font-weight-bold text-black" >Service List</h6> 
                                    </div>
                                <div class="col-3" style="display:flex; justify-content:flex-end;">
                                    <a href="{{route('create')}}"><button class="btn btn-primary">Add New Service</button></a>
                                </div>
                            </div>
                           
                        </div>
                        
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table style="color:black;" class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th>Service Image</th>
                                            <th>Service Name</th>                                       
                                            <th>Price</th>
                                            <th>Duration</th>
                                            <th>Availabilty</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                      @foreach ($product as $data)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div class="avatar me-2" ><img width="180px" height="130px" style="background-fit:cover" class="avatar-img" src="{{ asset('storage/' . $data->img) }}" />   
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->price }}</td>
                                            <td>@if( $data->duration == '')
                                                {{ $data->duration_es }}
                                                @else
                                                {{ $data->duration }}
                                                @endif

                                            </td>
                                            <td>@if ($data->availability == 0)
                                                    <div class="btn btn-success">Available</div>
                                                @else 
                                                <div class="btn btn-danger">Not Available</div>    
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-datatable btn-icon btn-transparent-dark  p-0"><i class="fa-solid fa-trash-can fa-sm"></i></a>
                                                <a class="btn btn-datatable btn-icon btn-transparent-dark p-1" href="{{ url('/admin/edit/' . $data->id) }}"><i class="fa-solid fa-pen-to-square fa-sm"></i></a>
                                                <a class="btn btn-datatable btn-icon btn-transparent-dark p-0" href =""><i class="fa-solid fa-eye fa-sm"></i></a>
                                               
                                            
                                         </td>
                                        </tr>
                                  
                                    @endforeach  
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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

    <script>

function confirmationDelete(anchor){
    
		let conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
    
    
   </script>
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


</body>

</html>