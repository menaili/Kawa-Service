<!DOCTYPE html>
<html lang="en">

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

<body> 
    @include('pages.header')
    <div class="front" id="home">
        
        <div class="main">
            <div class="front-text">
                <h1 class="left">
                    Advanced <br>
                    Technical Solutions
                </h1>
                <p class="left">
                Kawa Service offre Multiple Services as Degital Marketing, Create Site web, Application Mobile.
                Fast service, with Best Quality...    
            </p>
                <button class="slide-up">
                    Contact us
                </button>
            </div>
        </div>

    </div>


    <div class=" partner " id="partner">
        <div class="title">
            <h1 titre="partner">Partner</h1>
        </div>
        <div class="Scontent">
            <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                  <div class="swiper-slide swiper-slide1 ">
                    <a target="_blank" href="https://www.lg.com/dz"><img src="{{ asset('assets/imgs/lg.png') }}" alt=""></a>
                    
                  </div>
                  
                  <div class="swiper-slide swiper-slide1 ">
                    <a target="_blank" href="https://www.khalijistore.com/"><img src="{{ asset('assets/imgs/partner1.png') }}" alt=""></a>
                    
                  </div>
                  <div class="swiper-slide swiper-slide1 ">
                    <a target="_blank" href="https://1khalijstore.com/"><img src="{{ asset('assets/imgs/partner2.png') }}" alt=""></a>
                    
                  </div>
                  <div class="swiper-slide swiper-slide1 ">
                    <a target="_blank" href="https://prohurbs.com/"><img src="{{ asset('assets/imgs/partner3.png') }}" alt=""></a>
                    
                  </div>
                  <div class="swiper-slide swiper-slide1 ">
                    <a target="_blank" href="https://www.storesonline.fr/"> <img src="{{ asset('assets/imgs/partner4.png') }}" alt=""></a>
                   
                  </div>
                  <div class="swiper-slide swiper-slide1 ">
                    <a target="_blank" href="https://www.facebook.com/dekkicheacademie"><img src="{{ asset('assets/imgs/partner5.png') }}" alt=""></a>
                    
                  </div>
                  <div class="swiper-slide swiper-slide1 ">
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100073560375235"><img src="{{ asset('assets/imgs/partner6.png') }}" alt=""></a>
                    
                  </div>
                  <div class="swiper-slide swiper-slide1 ">
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100083313183748">
                      <img src="{{ asset('assets/imgs/partner7.png') }}" alt="">
                    </a>
                    
                  </div>
                  <div class="swiper-slide swiper-slide1 slide-up">
                    <a target="_blank" href="https://www.facebook.com/wissamexcellence"><img src="{{ asset('assets/imgs/partner8.png') }}" alt=""></a>
                    
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
              <div class=" swiper-button-next1"><img src="{{ asset('assets/imgs/r.png') }}" alt=""></div>
                <div class=" swiper-button-prev1"><img src="{{ asset('assets/imgs/l.png') }}" alt=""></div>
            </div>
        </div>
        
    </div>


    <div class="services " id="services">
        <div class="title">
            <h1 titre="services">Services</h1>
        </div>
        <div class="parent row">
            <div class="item right ">
                <a href="direction.blade.php?do=marketing">
                    <div class="picture">
                        <div>
                            <img src="{{ asset('assets/imgs/sponsor.png') }}" alt="">
                            <h3 titre="sponsor">Degital Marketing</h3>    
                        </div>
                        <p>Facebook, Instagram, Snap...</p>
                    </div>
                </a>
            </div>
            <div class="item right">
                <a href="direction.blade.php?do=website">
                    <div class="picture">
                        <div>
                            <img src="{{ asset('assets/imgs/web.png') }}" alt="">
                            <h3 titre="web">Web Site</h3>
                        </div>
                        
                        <p>Responsive web site ...</p>
                    </div>
                </a>
            </div>
            <div class="item right">
                <a href="direction.blade.php?do=appmobile">
                    <div class="picture">
                        <div>
                            <img src="{{ asset('assets/imgs/app.png') }}" alt="">
                            <h3 titre="App">APP Mobile</h3>
                        </div>
                        
                        <p>IOS, Android ...</p>
                    </div>
                    
                </a>
            </div>
            <div class="item right">
                <a href="direction.blade.php?do=design">
                    <div class="picture">
                        <div>
                            <img src="{{ asset('assets/imgs/design.png') }}" alt="">
                            <h3 titre="design">Design</h3>
                        </div>
                        
                        <p>Logo, Posts,...</p>
                    </div>
                </a>
            </div>
            <div class="item right">
                <a href="direction.blade.php?do=store">
                    <div class="picture">
                        <div>
                            <img src="{{ asset('assets/imgs/store.png') }}" alt="">
                            <h3 titre="store">Online Store</h3>
                           
                        </div>
                         <p>Store,...</p>
                    </div>
                </a>
            </div>
            <div class="item right">
                <a href="direction.blade.php?do=hosting">
                    <div class="picture">
                        <div>
                            <img src="{{ asset('assets/imgs/hosting.png') }}" alt="">
                            <h3 titre="hosting">Hosting</h3>
                           
                        </div>
                         <p>Best offre hosting</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="why">
        
        <div class="txt slide-up">
            <div>
                <h1>
                    Why Kawa service
                </h1>
                <p>
                    Kawa Service delivers different levels of services and solutions depending upon the nature and situation of our customers. However, the following is a list of common reasons why Perfect Touch will be your best choice...        </p>    
            </div>
            
        </div>
</div>
<div class=" services members" id="team">
        <div class="title">
            <h1 titre="services">Our Team</h1>
        </div>

    <div class="Scontent">
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
               
                @foreach ($members as $member)
                
                <div class="swiper-slide">
                   <div class="member">
                    <img class="memberpic" src="{{ asset('assets/imgs/oussama.png') }}" alt="">
                    <div class="member-info">
                        <h5>{{$member->name}}</h5>
                        <p titre="gerant">{{$member->position->name}} </p>
                    <div class="social">
                        
                            <a href="{{$member->link->link}}"  target="_blank"> <i class="bi bi-instagram"></i> </a>
                            {{-- <a target="_blank" href="http://facebook.com/oussamaharrarads"> <i class="bi bi-facebook"></i> </a>
                            <a href="https://twitter.com/Oussama_harrar?s=09" target="_blank"> <i class="bi bi-twitter"></i></a>
                            <a href="https://dz.linkedin.com/in/oussama-harrar-709333184" target="_blank" > <i class="bi bi-linkedin"></i> </a> --}}
                        </div>
                    </div>
                 </div>
                
                 </div>
                @endforeach


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

    <div class="contactus" id="contactus">
        <div class="title">
            <h1 titre="services">Contact Us</h1>
            <h5 titre="help">How can we help you?</h5>
            <p>Drop us a line and we will get back to you as soon as possible, usually within 24 hours.</p>
        </div>
       
        <form action="" class="">
            <div class="">
                <label for="">First Name:</label>
                <input type="text">
            </div>
            <div class="">
                <label for="">Last Name:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Company Name:</label>
                <input type="text">
            </div>
            <div>
                <label for="">E-mail:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Subject:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Phone Number:</label>
                <input type="text">
            </div>
            <div class="msg">
                <label for="">Message:</label>
                <textarea name="" id=""  rows="8"></textarea>
            </div>
            <div class="submit">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    @include('pages.footer')
    
    <script src="{{ asset('assets/js/language.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

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


</body>

</html>