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
 <div class="head">
        <h1 class="title_ser" titre="hosting">Hosting</h1>
        <p titre="app_text_header">Make your website available on the internet know is posible with Kawa</p>
    </div>
<div class=" work ">
    <div class="desc">
        <h1>Hosting Service</h1>
        <p> <i class="bi bi-check2"></i> Total Security</p>
        <p>
        <i class="bi bi-check2"></i>Complete Control
        </p>
        <p>
        <i class="bi bi-check2"></i>Global Data Centers
        </p>
        <p> <i class="bi bi-check2"></i>Do you like it ?</p>
        <div class="btn">
            <a href="#footer"><button titre="contact">Contact Us</button></a>

        </div>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/host1.jpg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/host2.jpg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/host3.jpg') }}" alt="">
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