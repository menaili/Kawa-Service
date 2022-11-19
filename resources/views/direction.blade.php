<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KAWA Services </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
       
        <link rel="stylesheet" href="pages/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
        
        @include('pages.header')
        @php
            $page = $_GET['do'];
        @endphp

        @switch ($page){
            @case(marketing)
                @include('pages.sponsor')
                @break;
            @case(website)
                @include('pages.web')
                @break;
            @case (appmobile)
                @include('pages.app')
                @break;
            @case (design)
                @include('pages.design')
                @break;
            @case (store)
                @include('pages.store')
                @break;
            @case (hosting)
                @include('pages.hosting')
                @break;
            @case (about)
                @include('pages.about')
                @break;
        }
        
    
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
        
    </body>
</html>
