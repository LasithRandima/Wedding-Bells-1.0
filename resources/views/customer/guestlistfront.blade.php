
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Listings</title>
    <link rel="shortcut icon" href="images/favicon/favicon 01 (Copy).png" type="image/x-icon">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <style>
      .vendorLogo img{
        object-fit: cover;
        width: 100%;
        height: auto;
      }

      .item:hover{
        filter: brightness(75%);
      }

      .item{
        transition: .5s ease-in-out;
      }

      .gallery h1 {
      letter-spacing: 12px;
      margin-bottom: 15px;
      font-size: 19px;
      text-align: center;
    }

    .gallery h3 {
      color: darkred;
      margin-bottom: 100px;
      text-align: center;
    }
    </style>


@livewireStyles

<link rel="stylesheet" type="text/css" href="css/toastr.min.css">

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
        <nav class=mynav>
          <a href="index.html"><img src="assets/logo/Wedding Bells Logo.png" alt="logo" class="logo"></a>
            <label for="btn" class="icon">
                <span class="fa fa-bars"></span>
            </label>
            <input type="checkbox"id="btn">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>
                    <label for="btn-1" class="shows">Vendors +</label>
                    <a href="vendors.html">Vendors</a>
                    <input type="checkbox" id="btn-1">
                    <ul>
                      <li class="itemhidden"><a href="vendors.html">Vendors</a></li>
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



                <li><a href="quicksearch.html">Quick Search</a></li>
                <li><a href="advertise.html">Advertise</a></li>
                <li><a href="#contactus">Contact</a></li>
                <li><a href="loging-register.html">Login/Register</a></li>

            </ul>
        </nav>
    </header>



    <!-- --------------------------------------------------slider---------------------------------------------------------------------------- -->

    <div id="slider">
        <div id="headerSlider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
            <li data-target="#headerSlider" data-slide-to="1"></li>
            <li data-target="#headerSlider" data-slide-to="2"></li>
            <li data-target="#headerSlider" data-slide-to="3"></li>
            <li data-target="#headerSlider" data-slide-to="4"></li>
            <li data-target="#headerSlider" data-slide-to="5"></li>
            <!-- <li data-target="#headerSlider" data-slide-to="3"></li> -->



          </ol>
          <div class="carousel-inner">

            <div class="carousel-item active">
              <img class="img-fluid" src="images/slider/Contact/1.png" >
              <div class="carousel-caption">
                <h1>Welcome To Wedding Bells</h1>
                <p>The Sri Lankan Premium Wedding Resource Directory.</p>

                <button type="button"  id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider1">
                  Read more
                </button>
              </div>
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="images/slider/Contact/2.png">
              <div class="carousel-caption">
                <h1>Browse Suppliers</h1>
                <p>Search over thousands of professionals in everywhere specialized in different kinds
                  of Wedding Services.</p>

                <button type="button"  id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider2">
                  Read more
                </button>
              </div>
            </div>


            <div class="carousel-item">
              <img class="img-fluid" src="images/slider/Contact/3.png">
              <div class="carousel-caption">
                <h1>Are you A Vendor?</h1>
                <p>We are here to help your grow your business. Come join with us to advertise</p>

                <button type="button"  id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider3">
                  Read more
                </button>
              </div>
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="images/slider/Contact/4.png">
              <div class="carousel-caption">
                <h1>Contact Us </h1>
                <P>Build your team with the best wedding professionals</p>

                <button type="button" id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider4">
                  Read more
                </button>
              </div>
            </div>


            <div class="carousel-item">
              <img class="img-fluid" src="images/slider/Contact/5.png">
              <div class="carousel-caption">
                <h1>Who We Are</h1>
                <p >Begin Planning Your Dream Wedding Day at Wedding Bells & Make Your Big Day Shine.</p>

                <button type="button" id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider5">
                  Read more
                </button>
              </div>
            </div>


            <div class="carousel-item">
              <img class="img-fluid" src="images/slider/Contact/6.jpg">
              <div class="carousel-caption">
                <h1>Your Supreme Wedding Planning Solution </h1>
                <p >A Handpicked Collection Of The Local'S Best Luxary Wedding Suppliers</p>

                <button type="button" id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider6">
                  Read more
                </button>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

<!-- -------------------------------------------------- end of slider-------------------------------------------------------------------------- -->
<livewire:guest-list />


<livewire:guest-table/>











    <!-------------------------------------------Footer Begin---------------------------------------------->


    <footer>
        <div class="container" id="contact">
            <div class="row">
                <div class="col-sm-6 mid-row">
                    <h4 data-aos="zoom-in" data-aos-duration="3000">Follow us</h4>
                    <p>We always have the latest tecnology to connect and share knowledge with you.
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
                    <h4 data-aos="zoom-in" data-aos-duration="3000">Contact us</h4>
                    <a href="index.html"><img src="Assets/logo/Wedding Bells Logo.png" class="footerlogo"></a>
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
      @livewireScripts

      <script type="text/javascript" src="js/toastr.min.js"></script>
      <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script type="text/javascript" src="js/aos.js"></script>
      <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
      <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>




{{-------------------------Livewire Toastr Notifications-------------------------------- --}}
<script>
    window.addEventListener('close-modal', event => {
        $('#budgetModal').modal('hide');
        $('#deleteBudgetModal').modal('hide');
    });


    window.addEventListener('toastr:info', event => {
        toastr.info(event.detail.message);
    });
</script>

<script>
    toastr.options =
    {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-left",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
  </script>

{{-------------------------End of Livewire Toastr Notifications-------------------------------- --}}




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
      <script src="js/main.js"></script>
      <script src="js/smooth-scroll.js"></script>
      <script>
          var scroll = new SmoothScroll('a[href*="#"]');
      </script>
      <script src="js/contact.js"></script>




      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'csv', 'pdf', 'colvis' ]
            } );

            table.buttons().container()
                .appendTo( '#example_wrapper .col-md-6:eq(0)' );
        } );
         </script>
</body>
</html>
