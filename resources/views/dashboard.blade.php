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


    <title>Home Page</title>
</head>
<body>
@include('layouts/top-bar')
@include('layouts/nav-bar')


        <div class="slideshow-container">
            
            <div class="mySlides">
                <img src="{{ asset('img/image1.jpg')}}" alt="Slide 1">
                <div class="img_dtls">
                    <p>WASHING @ DETAILING</p>
                    <h1>Keep Your Car Newer</h1>
                    <a for="btn1" href=""></a><button id="btn1">Explore More</button></a>
                </div>
            </div>

           
            <div class="mySlides">
                <img src="{{ asset('img/image2.jpg')}}" alt="Slide 2">
                <div class="img_dtls">
                    <p>WASHING @ DETAILING</p>
                    <h1>Quality Service For You</h1>
                    <a for="btn1" href=""></a><button id="btn1">Explore More</button></a>
                </div>
            </div>


            <div class="mySlides">
                <img src="{{ asset('img/image3.png')}}" alt="Slide 3">
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
@include('layouts/about')

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
@include('layouts/footer')
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