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
    <link href="../public/css/style.css" rel="stylesheet">
    <link  href="/../public/css/styles.css" rel="stylesheet" >


    <title>About Page</title>
</head>
<body>
@include('layouts/top-bar')
@include('layouts/nav-bar')
     
@include('layouts/about')



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