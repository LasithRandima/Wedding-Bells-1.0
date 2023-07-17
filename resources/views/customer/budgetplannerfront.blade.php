
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/budgetform.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/template.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<style>
    .modal-form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        align-items: center;
    }
    .modal-form label{
        color: #000 !important;
    }
    .modal-form input{
        border-color: #6c757d ;
        color: #000;
    }

    .modal-form select{
        border-color: #6c757d ;
        color: #000;
    }

        .modal-form form{
        width: 90%;
        max-width: 600px;
        margin-bottom: -40px;
        margin-top: 20px;

    }

    .dash_cards{
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        align-content: center !important;
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


    <livewire:budget-planner />


    <livewire:budget-data />

    {{-- <livewire:budget-table /> --}}

    {{-- <livewire:budget-modal /> --}}

    {{-- <livewire:list-budget /> --}}


    @livewireScripts

<script type="text/javascript" src="js/toastr.min.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>


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

@livewireScripts
</body>
</html>
