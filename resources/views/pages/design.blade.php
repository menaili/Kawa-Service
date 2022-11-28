<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KAWA Services </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">

 
  <link rel="stylesheet" href="{{ asset('assets/CSS/style1.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/CSS/responsive.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">    
</head>

<body> 
  @include('pages.header')
<body >
   
    <div class="head">
        <h1 class="title_ser" titre="design">Design</h1>
        <p titre="design_text">For any Logo, Facebook and Instagram Post Contact Kawa Team </p>
    </div>
<div class=" work ">
    <div class="desc">
        <h1 titre="logo">Logo</h1>
        <p> <i class="bi bi-check2"></i> Amazing  </p>
        <p>
        <i class="bi bi-check2"></i>Professional
        </p>
        <p> <i class="bi bi-check2"></i>Do you like it ?</p>
        <div class="btn">
            <a href="#footer"><button titre="contact">Contact Us</button></a>

        </div>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/logo1.jpg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/LOGO2.jpg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/logo.jpg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/logo3.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/logo4.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/logo5.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/logo6.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/logo8.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/logo7.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/logo9.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/logo10.jpg') }}" alt="">
            </div>
            </div>
            <div>
                 
                <div class="swiper-pagination"></div>
            </div>
           
          </div>
    </div>
</div>
<div class="separer"></div>
<div class=" work pair">
    <div class="desc pair">
        <h1 titre="posts">Instagram/Facebook Post</h1>
        <p> <i class="bi bi-check2"></i> Amazing </p>
        <p>
        <i class="bi bi-check2"></i> Professional
        </p>
        <p> <i class="bi bi-check2"></i>Do you like it ?</p>
        <div class="btn">
            <a href="#footer"><button titre="contact">Contact Us</button></a>

        </div>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/post1.jpg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/post2.jpg') }}" alt="">
              </div>
            </div>
            <div>
                
                <div class="swiper-pagination"></div>
            </div>
           
          </div>
    </div>
</div>
<div class="separer"></div>
<div class=" work ">
    <div class="desc">
        <h1 titre="cover">Cover</h1>
        <p> <i class="bi bi-check2"></i> Amazing </p>
        <p>
        <i class="bi bi-check2"></i> Professional
        </p>
        <p> <i class="bi bi-check2"></i>Do you like it ?</p>
        <div class="btn">
            <a href="#footer"><button titre="contact">Contact Us</button></a>

        </div>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/cover.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/coverture2.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/coverture3.jpg') }}" alt="">
            </div>
            </div>
            <div>
              
                <div class="swiper-pagination"></div>
            </div>
           
          </div>
    </div>
</div>
@include('pages.footer')

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/lang.js') }}"></script>

<script>
var swiper = new Swiper(".mySwiper", {

    slidesPerView: 1,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
</script>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</body>

</html>



















