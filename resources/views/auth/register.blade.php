
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<script src="https://kit.fontawesome.com/ff3606fe13.js" crossorigin="anonymous"></script>

<!-- Main css -->
<link rel="stylesheet" href="css/style1.css">
<style>
    .red{
        color: red;
    }
</style>
</head>
<body>



    <!-- Sign up form -->
    <section class="signup" style="padding: 70px 20px">
        <div class="container" style="font-family:verdana;">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 style="font-family:verdana" class="form-title">Register</h2>
                    <form method="POST" action="{{ route('register') }}" class="register-form" >
                    @csrf
                        <div class="form-group">
                            <label for="name"></label>
                            <input style="font-family:verdana" type="text"  id="name" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <x-input-error :messages="$errors->get('name')" class="mt-2 red" />
                        </div>
                        <div style ="line-height: 180% "></div>

                        <div class="form-group">
                            <label for="email"></label>
                            <input style="font-family:verdana" type="email" id="email" placeholder="Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <x-input-error :messages="$errors->get('email')" class="mt-2 red" />
                        </div>

                        
                        <div class="form-group">
                            
                        <label for="password" class=""></label>
                            
                             
                            
                                <input  style=" width: 270px; font-family:verdana;" id="password" type="password" placeholder= "Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                <x-input-error :messages="$errors->get('password')" class="mt-2 red"  />
                           
                        </div>


                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input  style=" width: 270px; font-family:verdana;" id="password-confirm" type="password" placeholder= "Password Confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                         
                       
                        <div class="form-group form-button">
                            <button type="submit" class="form-submit" style="border:none;"  class="form-group form-button">Register</button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="img/signup-image.jpg" alt="sing up image"></figure>
                    <a href="/login" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

