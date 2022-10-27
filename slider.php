<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com  -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Image Slider</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- CSS -->
  </head>
  <body>
    <section class="main swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide slide">
          <img src="img/a.jpg" alt="" class="image" />
          
        </div>
        <div class="slide swiper-slide">
          <img src="img/1.jpg" alt="" class="image" />
          
        </div>
        <div class="slide swiper-slide">
          <img src="img/d.jpg" alt="" class="image" />
          
        </div>
      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>

<style>

/* Google Fonts - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.main {
  height: 60vh;
  width: 100%;
}
.wrapper,
.slide {
  position: relative;
  width: 100%;
  height: 100%;
}
.slide {
  overflow: hidden;
}
.slide::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.4);
  z-index: 10;
}
.slide .image {
  height: 100%;
  width: 100%;
  object-fit: cover;
}

a.button {
  display: inline-block;
  padding: 10px 20px;
  border-radius: 25px;
  color: #333;
  background: #fff;
  text-decoration: none;
  margin-top: 25px;
  transition: all 0.3s ease;
}
a.button:hover {
  color: #fff;
  background-color: red;
}

/* swiper button css */
.nav-btn {
  height: 50px;
  width: 50px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.3);
}
.nav-btn:hover {
  background: rgba(255, 255, 255, 0.4);
}
.swiper-button-next {
  right: 50px;
}
.swiper-button-prev {
  left: 50px;
}
.nav-btn::before,
.nav-btn::after {
  font-size: 25px;
  color: #fff;
}
.swiper-pagination-bullet {
  opacity: 1;
  height: 12px;
  width: 12px;
  background-color: #fff;
  visibility: hidden;
}
.swiper-pagination-bullet-active {
  border: 2px solid #fff;
  background-color: #c87e4f;
}

@media screen and (max-width: 768px) {
  .nav-btn {
    visibility: hidden;
  }
  .swiper-pagination-bullet {
    visibility: visible;
  }
}


</style>


    <!-- Swiper JS -->
    <script src="JS/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      
      var indexValue = 0;
         function slideShow(){
           setTimeout(slideShow, 2500);
           var x;
           const img = document.querySelectorAll("");
           for(x = 0; x < img.length; x++){
             img[x].style.display = "none";
           }
           indexValue++;
           if(indexValue > img.length){indexValue = 1}
           img[indexValue -1].style.display = "block";
         }
         slideShow();
      


         let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySwiper");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

    </script>
  </body>
</html>
