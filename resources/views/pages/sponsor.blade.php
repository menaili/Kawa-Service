
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
        <h1 class="title_ser" titre="app">Degital Marketing </h1>
        <p titre="app_text_header"></p>
    </div>
<div class=" work ">
    <div class="desc">
        <h1>Create advertising campaigns</h1>
        <p> <i class="bi bi-check2"></i>  Find the target audience for the advertising campaign </p>
        <p>
        <i class="bi bi-check2"></i> Facebook, Instagram, Snapshat, ... 
        </p>
        <p>
        <i class="bi bi-check2"></i>Study market variables
        </p>
        <p> <i class="bi bi-check2"></i>Improve the performance of the advertising campaign</p>
        <div class="btn">
            <a href="#footer"><button titre="contact">Contact Us</button></a>

        </div>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/mark1.jpg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/mark1.jpg') }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('assets/imgas/mark1.jpg') }}" alt="">
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