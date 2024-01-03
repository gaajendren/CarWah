<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ff3606fe13.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   
    <link href="{{ asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link  href="{{ asset('css/styles.css')}}" rel="stylesheet" >

    <title>About Page</title>
</head>
<body>
@include('layouts/top-bar')
@include('layouts/nav-bar')

<div class="container  mt-4 mb-0">

</div>

<div class="price container " style="margin-top:10px">
    <div class="row p-2 ml-2 mb-5 ">
            <div class="col-12 m-auto">
                <div class="dropdown">
                <button style="background-color: #202C45;" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Vechicle
                </button>
                <ul class="dropdown-menu">
                    <form action="{{ url('/service') }}" method="get">
                    <li><button class="dropdown-item" id="preferredVechicle" type="submit">All</button></li>
                    </form>
                    @foreach ($data as $val)
                    <form action="{{ url('get/' .$val->id) }}" method="get">
                    <li><button class="dropdown-item" id="preferredVechicle" value="{{$val->id}}" type="submit">{{$val->name}}</button></li>
                    </form>
                    @endforeach
                </ul>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-12 m-auto">
            <div class="d-flex flex-wrap yellow"  id="product-container">
                @foreach ($product as $val)
                <div class="col-lg-4 pd-2  mt-0 mb-5">
                    <div class="d-flex align-items-stretch h-100">
                        <div class="border d-flex flex-column">
                            <div class="row mx-4 mt-3 mb-0">
                                <img class="img-fluid" src="{{ asset('storage/' . $val->img) }}" style="object-fit:cover; width: 250px; height: 150px;" alt="">
                            </div>
                            <div class="row mx-4 d-flex justify-content-center">
                            <div  id="default" class="price-item mb-0">
                                <div class="price-header pb-0">
                                    <h3>{{$val->name}}</h3>
                                    <p><span>RM </span><strong>{{$val->price}}</strong></p>
                                    <p><span>Vechicle : </span><strong>{{$val->vechicles->name}}</strong></p>
                                </div>

                                </div>
                            </div>
                            <div class="row mx-4 d-flex justify-content-center px-0">
                                <div class="price-body mt-0">

                                @if($val->duration == '')
                                <p><span>Duration Estimation : </span><strong>  {{$val->duration_es}}</strong></p>
                                @else 
                                <p><span>Duration: </span><strong>  {{$val->duration}} Hour</strong></p>
                                @endif                            
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen-sm-down">
                                            <div class="modal-content bg-dark text-white">
                                                <!-- Add your modal content here -->
                                                <div class="modal-header">
                                                    <span><h5 class="modal-title text-white" id="exampleModalLabel">{{$val->name}} </h5><p class="mb-0 pb-0">RM {{$val->price}}</p></span>
                                                    <button type="button" class="btn btn-dark btn-shadow-none btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark fa-s"></i></button>
                                                </div>
                                                <div class="modal-body">
                                                <label for="">Product Details</label>
                                                <p style="text-indent:-8px;"> {{$val->description}}</p>

                                                    <label for="">Service Provided</label>
                                                    <ul>
                                                        @php
                                                        $details = [];                                     
                                                        $details = explode("/n" ,$val->service)                                    
                                                        @endphp

                                                        @foreach ($details as $v)
                                                        <div class="row">
                                                            <div class="col-1 p-0">
                                                            <li><i  class="far fa-check-circle"></i></li>
                                                            </div>
                                                            <div class="col-11 p-0">
                                                                <p style="text-indent: 0px; ">{{$v}}</p>
                                                            </div>
                                                        </div>
                                                        
                                                        @endforeach   
                                                    </ul>
                                                </div>
                                                <div class="modal-footer"> 
                                                
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>         
                                </div>
                            </div>
                            <div class="row mx-4 d-flex justify-content-center mt-auto mb-3">
                                <div class="price-footer">
                                    <button type="button" class="btn btn-custom" style="background-color: #202C45; color:white; padding:11px 20px; " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Learn More
                                    </button>
                                    <a class="btn btn-custom" style="background-color:#b4ab00; color:black;" href="{{url('book/'. $val->id)}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
     
@include('layouts/footer')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   


<script>
    const myModal = document.getElementById('exampleModal');
    const myInput = document.getElementById('myInput');

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus();
    });
</script>


</body>
</html>