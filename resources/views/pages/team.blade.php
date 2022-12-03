

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAWA Services </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/responsive.css') }}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
</head>

<div class=" services members" id="team">
    <div class="title">
        <h1 titre="services">Our Team</h1>
    </div>

<div class="Scontent">
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
           
         


             <div class="swiper-slide">
            <div class="member">
                <img class="memberpic" src="{{ asset('assets/imgs/djilali.jpg') }}" alt="">
                <div class="member-info">
                    <h5>D.Djilali</h5>
                    <p titre="devweb">Developpeur Web</p>
                    <div class="social">
                        <a href="https://www.instagram.com/djilalidernane/" target="_blank"> <i class="bi bi-instagram"></i> </a>
                        <a href="https://www.facebook.com/dernane.djilali1" target="_blank"> <i class="bi bi-facebook"></i> </a>
                        <a href="https://twitter.com/DDernane?t=Q61XgUCoUT5pg49wlI7ZxQ&s=09" target="_blank"> <i class="bi bi-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/djilali-dernane-8b1984218" target="_blank"> <i class="bi bi-linkedin"></i> </a>
                    </div>
                </div>
             </div>
            
            </div>


            <div class="swiper-slide">
            <div class="member">
                <img class="memberpic" src="{{ asset('assets/imgs/noussaiba.jpg') }}" alt="">
                <div class="member-info">
                    <h5>Noussaiba</h5>
                    <p titre="designer">Designer</p>
                    <div class="social">
                        <a href="https://instagram.com/noussaiba_infographe?igshid=YmMyMTA2M2Y=" target="_blank"> <i class="bi bi-instagram"></i> </a>
                        <a href="https://www.facebook.com/profile.php?id=100013549053419" target="_blank"> <i class="bi bi-facebook"></i> </a>
                        <a href="https://twitter.com/Boukh1Noussaiba?t=aCnexJl-o4UYgTjYlFgB0w&s=08" target="_blank"> <i class="bi bi-twitter"></i> </a>
                        <a href="https://www.linkedin.com/in/noussaiba-infographe-032190201" target="_blank"> <i class="bi bi-linkedin"></i> </a>
                    </div>
                </div>
            </div>
            
            </div>
            <div class="swiper-slide">
                <div class="member">
                    <img class="memberpic" src="{{ asset('assets/imgs/haroun.jpg') }}" alt="">
                    <div class="member-info">
                        <h5>M.Haroun</h5>
                        <p titre="back">Backend Developer </p>
                        <div class="social">
                            <a href="https://instagram.com/menaili.hr?igshid=YmMyMTA2M2Y="  target="_blank"> <i class="bi bi-instagram"></i> </a>
                            <a target="_blank" href="https://www.facebook.com/haroun.errachide.41"> <i class="bi bi-facebook"></i> </a>
                            <a href="" target="_blank"> <i class="bi bi-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/haroun-errachid-menaili-a5088222b" target="_blank" > <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
                
                </div>
        </div>
        </div>
        
    </div>
</div>
<script src="{{ asset('assets/js/language.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper1", {
    spaceBetween: 30,
    centeredSlides: true,
    
    loop: true,
    breakpoints:{
        100: {
          slidesPerView: 2,
        },
        600: {
          slidesPerView: 3,
        }
      },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next1",
      prevEl: ".swiper-button-prev1",
    },
  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints:{
        100: {
          slidesPerView: 2,
        },
        600: {
          slidesPerView: 3,
        }
      },
  });
</script>
<script>
    var slideUp = {
        distance: '50px',
        origin: 'bottom',
        opacity: null,
        delay: 150,
        reset: true,
        opacity:0,
        duration: 600
    };
    var slideright = {
        distance: '20px',
        origin: 'right',
        opacity: null,
        delay: 150,
        reset: true,
        opacity:0,
        duration: 800
    };
    var slideleft = {
        distance: '20px',
        origin: 'left',
        opacity: null,
        delay: 150,
        reset: true,
        opacity:0,
        duration: 800
    };
    ScrollReveal().reveal('.left',slideright);
    ScrollReveal().reveal('.right',slideleft);
    ScrollReveal().reveal('.slide-up',slideUp);
</script>




