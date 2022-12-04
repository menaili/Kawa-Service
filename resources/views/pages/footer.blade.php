
<div class="contactus" id="contactus">
    <div class="title">
        <h1 titre="services">Contact Us</h1>
        <h5 titre="help">How can we help you?</h5>
        <p>Drop us a line and we will get back to you as soon as possible, usually within 24 hours.</p>
    </div>
    <form action="{{route('Notification.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="">
            <label for="">First Name:</label>
            <input type="text" name="FirstName">
        </div>
        <div class="">
            <label for="">Last Name:</label>
            <input type="text" name="LastName">
        </div>
        <div>
            <label for="">Company Name:</label>
            <input type="text" name="CompanyName">
        </div>
        <div>
            <label for="">E-mail:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Subject:</label>
            <input type="text" name="subject">
        </div>
        <div>
            <label for="">Phone Number:</label>
            <input type="text" name="phone_number">
        </div>
        <div class="msg">
            <label for="">Message:</label>
            <textarea name="message" id=""  rows="8"></textarea>
        </div>
        <div class="submit">
            <input type="submit" value="Submit">
        </div>
    </form>
    
</div>


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="footer" id="footer">
        <h1>KAWA SERVICE</h1>
        <div class="info">
            <div>
                <h3>Our Profile</h3>
                <p>Advanced Technical Solutions <br>
                    And more...</p>
            </div>
            <div>
                <h3>More</h3>
                
                <a href="direction.php?do=about" titre="abouttitle">About Us</a> <br>
                <a href="index.php#team" titre ="team">Team </a> <br>
                <a href="index.php#services" titre="services"> Services</a> <br>
                <a href="pages/politique.html" target="_blank" titre="privacy"> Privacy Policy</a> <br>
                <a href="#footer" target="_blank" titre="help"> How we can help you ?</a> <br>
            </div>
            <div>
                <h3>Contact Us</h3>
                <a> <i class="bi bi-telephone-fill"></i> +213 552288157  </a>
                <p>contact@kawa-service.com</p>
                <a href="https://www.google.com/maps/dir//kawa+service/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x128e537adc5cffe3:0x55a426564751fe42?sa=X&ved=2ahUKEwjloNK_-P35AhXChc4BHWJECaMQ9Rd6BAhREAU" target="_blank"> <i class="bi bi-geo-alt-fill"></i> Ru hamza 82 baraki 16027 , alger </a>
            </div>
        </div>
        <div class="kawa-social">
        <a href="https://www.instagram.com/kawa.service/" target="_blank"> <i class="bi bi-instagram"></i> </a>
              
            <a href="https://www.facebook.com/kawaservicenewpage" target="_blank"> <i class="bi bi-facebook"></i>  </a>
         
            <i class="bi bi-twitter"></i>
            <a> <i class="bi bi-linkedin"></i>  </a>
               
        </div>
        <div>
            <p>Copyright © 2022 Perfect Touch All rights reserved to KAWA..</p>
        </div>
    </div>