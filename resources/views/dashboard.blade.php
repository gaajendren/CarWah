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
    <link href="..public/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="../public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link  href="/../public/css/styles.css" rel="stylesheet" >
    <link href="../public/css/style.css" rel="stylesheet">


    <title>Home Page</title>
</head>
<body>
@include('layouts/top-bar')
@include('layouts/nav-bar')


        <div class="slideshow-container">
            
            <div class="mySlides">
                <img src="/../public/img/image1.jpg" alt="Slide 1">
                <div class="img_dtls">
                    <p>WASHING @ DETAILING</p>
                    <h1>Keep Your Car Newer</h1>
                    <a for="btn1" href=""></a><button id="btn1">Explore More</button></a>
                </div>
            </div>

           
            <div class="mySlides">
                <img src="/../public/img/image2.jpg" alt="Slide 2">
                <div class="img_dtls">
                    <p>WASHING @ DETAILING</p>
                    <h1>Quality Service For You</h1>
                    <a for="btn1" href=""></a><button id="btn1">Explore More</button></a>
                </div>
            </div>


            <div class="mySlides">
                <img src="/../public/img/image3.png" alt="Slide 3">
                <div class="img_dtls">
                    <p>WASHING @ DETAILING</p>
                    <h1>Exterior & Interior Washing</h1>
                    <a for="btn1" href=""></a><button id="btn1">Explore More</button></a>
                </div>
            </div>

            <div class="dot-container">
                <span class="dot"  onclick="currentMinusSlide()"><i class="fa-solid fa-chevron-left fa-2xl" style="color: #fbff00;"></i></span>
                <span class="dot" onclick="currentPlusSlide()"><i class="fa-solid fa-chevron-right fa-2xl" style="color: #fff700;"></i></span>
            </div>
        </div>

        <div class="about-section">
            <div class="column-img">
                <div class="card">
                    <img src="/public/img/car.jpeg" alt="">
                </div>
            </div>
            <div class="column-text">

                <p class="title" style="color:#b4ab00;">ABOUT US</p>
                <h2 style="color: #202c45;" class="title-about">Car Washing And Detailing</h2>
                <p>Azim Aic Sdn Bhd have been successfully providing cleaning to various sectors since 1991.Excellence in cleaning was developed by implementing advanced range of products (chemicals and machineries) which is tested and guaranteed. Thus, the secret of quality services is proven by it's longstanding among rising competitors.</p>
                <ul>
                    <div class="li-group">
                    <li >Automobile Grooming</li>
                    <i style="color: #b9b007;" class="fa-regular fa-circle-check fa-2xs"></i></div>
                    <div class="li-group">
                    <li >Paint Correction and Polishing</li>
                    <i style="color: #b9b007;" class="fa-regular fa-circle-check fa-2xs"></i></div>
                    <div class="li-group">
                    <li>Coating</li>
                    <i style="color: #b9b007;" class="fa-regular fa-circle-check fa-2xs"></i></div>
                    <div class="li-group">
                    <li>Interior Fogging</li>
                    <i style="color: #b9b007;" class="fa-regular fa-circle-check fa-2xs"></i></div>
                    <div class="li-group">
                    <li >Automobile Repairing</li>
                    <i style="color: #b9b007;" class="fa-regular fa-circle-check fa-2xs"></i></div>
                    <div class="li-group">
                    <li >Office Carpet Cleaning</li>
                    <i style="color: #b9b007;" class="fa-regular fa-circle-check fa-2xs"></i></div>
                    <div class="li-group">
                    <li >Building Cleaning</li>
                    <i style="color: #b9b007;" class="fa-regular fa-circle-check fa-2xs"></i></div>
                    <div class="li-group">
                    <li >Relevant Upholstery and Leather Cleaning</li>
                    <i style="color: #b9b007;" class="fa-regular fa-circle-check fa-2xs"></i></div>
                </ul>
                <a for="btn2" href=""></a><button id="btn2">Learn More</button></a>
                    
            </div>
        </div>

        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p  style="color:#b4ab00;" >What We Do?</p>
                    <h2 style="color: #202c45;">Premium Washing Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash-1"></i>
                            <h3>Automobile Grooming</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Paint Correction and Polishing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-vacuum-cleaner"></i>
                            <h3>Coating</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-seat"></i>
                            <h3>Interior Fogging</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service"></i>
                            <h3>Automobile Repairing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service-2"></i>
                            <h3>Office Carpet Cleaning</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Building Cleaning</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-brush-1"></i>
                            <h3>Relevant Upholstery and Leather Cleaning</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Washing Plan</p>
                    <h2>Choose Your Plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div  id="default" class="price-item">
                            <div class="price-header">
                                <h3>Basic Cleaning</h3>
                                <h2><span>$</span><strong>25</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="default" class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium Cleaning</h3>
                                <h2><span>$</span><strong>35</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div  id="default" class="price-item">
                            <div class="price-header">
                                <h3>Complex Cleaning</h3>
                                <h2><span>$</span><strong>49</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Our Service</a>
                            <a href="">Service Points</a>
                            <a href="">Pricing Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Full Name">
                                <input class="form-control" placeholder="Email">
                                <button class="btn btn-custom">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved. Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>

        
        <script>
            var timer = null;
            var slideIndex = 0;
            showSlides();
        
            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                    slideIndex++;
      
                if(slideIndex == -2 || slideIndex == -1){
                    slideIndex = 2;
                }

                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                if (slideIndex >= slides.length) {
                    slideIndex = 0; 
                }
        
                for (i = 0; i < dots.length; i++) {
                    if (dots[i] && dots[i].className) { 
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                }
        
                slides[slideIndex].style.display = "block";
        
                if (dots[slideIndex] && dots[slideIndex].className) { // Check if dots[slideIndex] and dots[slideIndex].className are defined
                    dots[slideIndex].className += " active";
                }
        
                timer = setTimeout(showSlides, 2000);
            }
        
            function currentMinusSlide() {
                clearTimeout(timer);
                slideIndex = slideIndex - 2 ; 
                showSlides();
            }
        
            function currentPlusSlide() {
                clearTimeout(timer);
                showSlides();
            }


            function priceShadow(){
                let defaultShadow =document.querySelectorAll('#default');
               let list =document.querySelectorAll('.price-item').forEach((i)=>{
              
                    i.addEventListener('click', (val)=>{
                        defaultShadow.forEach((item)=> {
                            item.classList.remove('box-shadow');
                            item.classList.remove('featured-item');
                            item.classList.add('no-shadow'); 
                        });
                        i.classList.add('box-shadow');
                        i.classList.add('featured-item');

                       
                    });
               });           

            }

            priceShadow();
        </script>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
</body>
</html>