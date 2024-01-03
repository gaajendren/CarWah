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


    <title>Booking list Page</title>
</head>
<body>
@include('layouts/top-bar')
@include('layouts/nav-bar')


     
<div class="container">

<div class="contain-title" >
    <h2 class="title my-5" style="text-align: center">My Booking</h2>
</div>
    @foreach ($data as $val)
    <div class="row mb-5 mt-3">
        <div class="col-lg-8 m-auto ">
           <div class="border shadow">
                <div class="card-body">
                    <h5 class="card-title">{{$val->fullname}}</h5>
                    @php
                        $formattedDate = (new DateTime($val->date))->format('j M Y');
                    @endphp
                    <p class="card-text">Date: {{ $formattedDate }}</p>
                    
                    {{-- Format the Time --}}
                    @php
                        $formattedTime = (new DateTime($val->time))->format('g:i A');
                    @endphp
                    <p class="card-text">Time: {{ $formattedTime }}</p>

                    @if ($val->status == 'Pending')
                        <div class="badge badge-info">Pending</div>
                        @elseif ($val->status == 'Received')
                        <div class="badge badge-primary">Received</div> 
                        @elseif ($val->status == 'On the Process')
                        <div class="badge badge-warning">On the Process</div>
                        @elseif ($val->status == 'Settle')
                        <div class="badge badge-success">Settle</div>
                        @elseif ($val->status == 'Rejected')
                        <div class="badge badge-danger">Rejected</div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


@include('layouts/footer')

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
</body>
</html>