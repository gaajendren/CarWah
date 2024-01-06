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

    <style>
                        .rating {
                display: inline-flex;
                    margin-top: -10px;
                    flex-direction: row-reverse;
                
                    
                }

                .rating>input {
                    display: none
                }

                .rating>label {
                    position: relative;
                    width: 28px;
                    font-size: 35px;
                    color: #ff0000;
                    cursor: pointer;
                }

                .rating>label::before {
                    content: "\2605";
                    position: absolute;
                    opacity: 0
                }

                .rating>label:hover:before,
                .rating>label:hover~label:before {
                    opacity: 1 !important
                }

                .rating>input:checked~label:before {
                    opacity: 1
                }

                .rating:hover>input:checked~label:before {
                    opacity: 0.4
                }
    </style>

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
                        <div class="badge badge-info p-2">Pending</div>
                        @elseif ($val->status == 'Received')
                        <div class="badge badge-primary p-2">Received</div> 
                        @elseif ($val->status == 'On the Process')
                        <div class="badge badge-warning p-2">On the Process</div>
                        @elseif ($val->status == 'Settle')
                        <div class="badge badge-success p-2">Settle</div>
                        @elseif ($val->status == 'Rejected')
                        <div class="badge badge-danger p-2">Rejected</div>
                    @endif

                    <div class="mb-1 mt-3 ml-0">
                    @php
                        $isBook = $review->where('booking_id', $val->id)->first();

                        if(!$isBook) {
                            if($val->status == 'Settle') {
                    @endphp
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Comment</button>
                                @include ('layouts.comment')
                    @php
                            }
                        }
                    @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


@include('layouts/footer')

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    <script>
        const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

  })
}
    </script>
</body>
</html>