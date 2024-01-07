<div class="nav-bar blue">
            <div class="container mr-0 ml-5">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between hd-container" id="navbarCollapse">
                        <div class="navbar-nav mr-auto hd-link">
                            <a href="/dashboard" class="nav-item nav-link active">Home</a>
                            <a href="/about" class="nav-item nav-link">About</a>
                            <a href="/service" class="nav-item nav-link">Service</a>
                       
                            <a href="/booking" class="nav-item nav-link">Booking</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" id="btn" href="{{route('service')}}">Get Appointment</a>
                            <a href="{{route('logout')}}"><i style="color:white;" class="fa fa-sign-out ml-4"  aria-hidden="true"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>