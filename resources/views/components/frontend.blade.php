<?php
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

$categories= DB::table('vendor_categories')->limit(6)->get();
$topAds= DB::table('advertisements')->limit(8)->get();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Bells</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon 01 (Copy).png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>
<body>

  <div class="spinner-container">
    <div class="circles">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

<header>
    <nav class="mynav">
      <a href="#"><img src="assets/logo/Wedding Bells Logo.png" alt="logo" class="logo"></a>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox"id="btn">
        <ul>
            <li><a href="#">Home</a></li>
            <li>
                <label for="btn-1" class="shows ">Vendors <span><i class="fa fa-caret-down" aria-hidden="true"></i></span></label>
                <a href="vendors.html">Vendors</a>
                <input type="checkbox" id="btn-1">
                <ul>
                  <li class="itemhidden"><a href="#">Vendors</a></li>
                  <li><a href="#">Bridal Wear</a></li>
                  <li><a href="#">Groom Wear</a></li>
                  <li><a href="#">Beauticians/Saloons</a></li>
                  <li><a href="#">Wedding Jewelry</a></li>
                  <li><a href="#">Wedding Shoes</a></li>
                  <li><a href="#">Wedding Planner</a></li>
                  <li><a href="#">Wedding Venues</a></li>
                  <li><a href="#">Wedding Decors</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Ashtaka</a></li>
                  <li><a href="#">Wedding Cakes</a></li>
                  <li><a href="#">Stationary</a></li>
                  <li><a href="#">Entertainment</a></li>
                  <li><a href="#">Vehicle Hire</a></li>
                  <li><a href="#">Honeymoon Venues</a></li>

               </ul>
           </li>




            <li><a href="#quicksearch">Quick Search</a></li>
            <li><a href="advertise.html">Advertise</a></li>
            <li><a href="contactus.html">Contact</a></li>
            <li><a href="loging-register.html">Login/Register</a></li>

            <li>
              <label for="btn-22" class="shows ">
                <img
                  src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                  class="rounded-circle"
                  height="25"
                  alt="Black and White Portrait of a Man"
                  loading="lazy"
                />
                <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
              </label>


              <!-- large screen avater -->
              <a

            >
              <img
                src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                class="rounded-circle"
                height="25"
                alt="Black and White Portrait of a Man"
                loading="lazy"
              />
            </a>

            <!-- end large screen avater -->

              <input type="checkbox" id="btn-22">
              <ul class="u_avatar">
                <li class="itemhidden">

                  <a href="#">
                  <span>
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy"
                  /></span>
                  <span> Hi, User John!</span>
                  </a>


                </li>
                <li><a href="#">Manage Profile</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Signout</a></li>



             </ul>
         </li>



        </ul>
    </nav>
</header>

<!-- --------------------------------------------------slider---------------------------------------------------------------------------- -->

<main>
    {{ $slot }}
</main>


  <!-------------------------------------------Footer Begin---------------------------------------------->

<div class="map" >
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4745.027985058492!2d79.94732771592962!3d6.846012384230547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25044e7acf683%3A0x6513c1923579a890!2sStudio%20X!5e0!3m2!1sen!2slk!4v1603480566808!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<footer>
  <div class="container" id="contact">
      <div class="row">
          <div class="col-sm-6 mid-row">
              <h4>Follow us</h4>
              <p>We always have the latest technology to connect and share knowledge with you.
                So the knowledge you want are here.so keep share your journey with us.

              </p>
              <div class="social-icon">
                  <a href="0701234567"><i class="fas fa-phone"></i></a>
                  <a href="https://www.facebook.com/pages/weddingbells/"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://www.twitter.com/pages/weddingbells/"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.googleplus.com/pages/weddingbells/"><i class="fab fa-google-plus-g"></i></a>
                  <a href="https://www.instagram.com/pages/weddingbells/"><i class="fab fa-instagram"></i></a>
                  <a href="weddingbells@gmail.com "><i class="fas fa-envelope"></i></a>
              </div>
          </div>
          <div class="col-sm-6 contact">
              <h4>Contact us</h4>
              <a href="#"><img src="Assets/logo/Wedding Bells Logo.png" class="footerlogo"></a>
              <div class="contact-items">
              <p><i class="fas fa-map-marker-alt"></i>Wedding Bells<span class="number"></span></p>
              <p><i class="fas fa-phone"></i>Call Us: <span class="number"><a href=""> 0711234567 </a>/<a href=""> 0771234567 </a></span></p>
              <p><i class="fas fa-envelope-open"></i>Email us: <span class="number"><a href="weddingbells.lk@gmail.com" class="info">weddingbells.lk@gmail.com </a></span></p>

              </div>
          </div>
      </div>
  </div>
</footer>

<section id="footer">
  <div class="container">
     <p>Copyright © 2020 Wedding Bells. All Rights Reserved. | Design and Develop by #UnknownDev</p>
  </div>
</div>

   <!-------------------------------------------Footer End---------------------------------------------->


<script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js"') }}></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/calendar.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/dropdown.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>

<script>
  $(document).ready(function(){
     $('.dropdown-toggle').dropdown()
 });
</script>

<script type="text/javascript">
  $('.carousel').carousel({
    interval: 4000,

  })
</script>

<script src="{{ asset('js/smooth-scroll.js') }}"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>

<script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
<script>
  AOS.init({
    offset: 180,
    delay: 0,
    duration: 800,
    easing: 'ease',
    once: false,
    mirror: false,
    anchorPlacement: 'top-bottom',

  });
</script>


</body>
</html>
