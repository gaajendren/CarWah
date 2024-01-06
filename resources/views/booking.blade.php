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

<br>
<br>
    <div class="container">
        <div class="col-lg-8 m-auto">
            <h2>Booking Form</h2>
            <br>
            <form method="post" action="{{url('/book/store/'. $id)}}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="preferredDate">Preferred Date:</label>
                <input type="date" min="{{ date('Y-m-d') }}"  max="{{ date('Y-m-d', strtotime('+1 month')) }}" class="form-control" id="preferredDate" name="date" onchange="updateTimeSlots()">
            </div>

            <div class="form-group">
                    <label for="preferredTime">Preferred Time:</label>
                    <select class="form-control" id="preferredTime" name="time">
                        <!-- PHP loop to directly include available time slots -->
                    </select>
                </div>
                

                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" class="form-control" id="fullname" name="fullname">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="contact">
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Include Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@include('layouts/footer')


   
<script>
    function updateTimeSlots() {
        var selectedDate = $('#preferredDate').val();
        console.log('Selected Date:', selectedDate);

        $.ajax({
            type: 'GET',
            url: '/get-available-time-slots/' + {{ $id }},
            data: { date: selectedDate },
            success: function(response) {
                console.log('Response:', response);

                // Update the time slots dropdown with the response data
                $('#preferredTime').empty();
                $.each(response.availableTimeSlots, function(index, timeSlot) {
                    var formattedTime = moment(timeSlot, 'HH:mm').format('h:mm a');
                    console.log('Formatted Time:', formattedTime);
                    $('#preferredTime').append('<option value="' + timeSlot + '">' + formattedTime + '</option>');
                });
            },
            error: function(error) {
                console.error('Error fetching available time slots:', error);
            }
        });
    }



</script>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
</body>
</html>