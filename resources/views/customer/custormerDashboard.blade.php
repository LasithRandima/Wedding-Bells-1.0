
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendors</title>
    <link rel="shortcut icon" href="images/favicon/favicon 01 (Copy).png" type="image/x-icon">
    <link rel="stylesheet" href="css/vendors.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/animate.min_2.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/vendoraddcard.css">

<style>

@import url('https://fonts.googleapis.com/css2?family=Petit+Formal+Script&family=Sacramento&family=Work+Sans&display=swap');

    .couple-header{
        font-family: 'Sacramento';
    }

    .couple-header h2{
        font-size: 6.5rem;

    }

    .couple-header .nums{
        display: block;
        background-color: rgba(216, 82, 137, 0.8);
        font-family: 'Work Sans';
        font-size: 38px;
        line-height: 65px;
        animation-iteration-count: infinite;
        animation-duration: 1s;
    }

    .couple-header .desc{
        display: block;
        font-family: 'Work Sans';
        font-size: 15px;
        line-height: 10px;
    }

    .wedding_date{
        font-size: 30px;
        font-family: 'Petit Formal Script', sans-serif;
    }

    .welcome h2{
        margin-top: 3rem;
        font-size: 60px;
        margin-bottom: 10px;
        line-height: 1.5;
        font-weight: bold;
        color: #F14E95;
        font-family: "Sacramento", Arial, serif;
    }

    .welcome_couple{
        font-size: 40px;
        margin-bottom: 10px;
        line-height: 1.5;
        font-weight: bold;
        color: #4e4e4e;
        font-family: "Sacramento", Arial, serif;
    }


    .welcome h4{
        font-size: 25px;
        margin-bottom: 10px;
        line-height: 1.5;
        font-weight: bold;
        color: #18070e;
        font-family: "Petit Formal Script", Arial, serif;
    }


    .heart {
        position: absolute;
        top: 4em;
        left: -80px;
        right: 0;
        z-index: 99;
        animation: pulse 1s ease infinite;
        }
    .heart i {
        font-size: 20px;
        background: #fff;
        padding: 20px;
        color: #F14E95;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        }

    .profile_img{
        animation-iteration-count: 5;
        animation-delay: 3s;
        animation-duration: 4s;
    }

    .dash_cards{
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        align-content: center !important;
    }

    .ser_gallery{
        display: flex;
        align-items: center;
        justify-content: center;
        /* width:320px !important;
        Height:240px !important; */
    }

   .ser_tile{
    display: grid !important;
    justify-content: center !important;
    align-content: center !important;
    }

    @media screen and (max-width: 991px) {
        .profile_img{
            width:120px;
            height: auto;
    }
        .heart {
            display: none;
        }

        }

        @media screen and (max-width: 768px) {
        .heart {
            display: none;
        }
        }



    /*-----------------------------Count Down Timer Begins Here----------------------------------------------- */

    .simply-countdown {
  /* The countdown */
  margin-bottom: 2em;
}

.simply-countdown > .simply-section {
  /* coutndown blocks */
  display: inline-block;
  width: 100px;
  height: 100px;
  background: rgba(241, 78, 149, 0.8);
  margin: 0 4px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  position: relative;
  animation: pulse 1s ease infinite;
}

@keyframes pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}
.simply-countdown > .simply-section > div {
  /* countdown block inner div */
  display: table-cell;
  vertical-align: middle;
  height: 100px;
  width: 100px;
}

.simply-countdown > .simply-section .simply-amount,
.simply-countdown > .simply-section .simply-word {
  display: block;
  color: white;
  /* amounts and words */
}

.simply-countdown > .simply-section .simply-amount {
  font-size: 30px;
  /* amounts */
}

.simply-countdown > .simply-section .simply-word {
  color: rgba(255, 255, 255, 0.7);
  text-transform: uppercase;
  font-size: 12px;
  /* words */
}

    /*-----------------------------Count Down Timer Ends Here----------------------------------------------- */

    .ads{
        margin-top: 100px;
        text-align: center;
        scroll-margin-top: -100px;
    }
    .ads h1 {
        letter-spacing: 12px;
        margin-bottom: 15px;
        font-size: 19px;
    }

    .ads h3 {
        color: darkred;
        margin-bottom: 100px;
    }



    .ads p {
        font-size: 1.2rem;
        max-width: 80vw;
        text-align: center;
        margin: auto;
        margin-bottom: 50px;
    }

    .pagination a {
  color: white;
  background-color: #24023f;
  border-radius: 50%;
}
.pagination a:active {
  border: cyan solid 3px;
  color: white;
}
/*-----
.pagination a:visited {
  background:  #440479;
  border: cyan solid 2px;
  color: white;
}
-------*/
.pagination a:hover {
    background:linear-gradient(to right,#6e1eee,#f3f3f3);
  color: white;
}
.pagenumbers{
    margin-top: 70px;
}





/*-------------------------Vendor category Gallery------------------------ */

.cat_wrapper{
    /* width: 22%; */
    min-height: 237px;
    /* position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%, -50%); */
    background:rgba(246, 241, 238,1);
    box-shadow: 0 10px 20px rgb(40,40,40);

}

.vendor_cat_img{
    height:100%;
    Width: 100%
}

.vendor_icon{
    display: block;
}

.overlay{
    position: absolute;
    top:0%;
    left:0%;
    right: 0%;
    bottom:0%;
    opacity: 0%;
    transition: opacity 0.4s;
    background-color: rgba(255,255,255,1);
    cursor: pointer;
}

.content{
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    color: #000;
    font-family: sans-serif;
    font-size: 25px;
    text-align: center;

}

.content p{
    font-size:0.6em;
}

.buttonfont{
    font-size: 15px !important;
}

.cat_wrapper:hover .overlay{
    /* background-color: rgba(255, 255, 255, 0.5); */
    opacity: 0.95;
}





</style>

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
            <a href="index.html"><img src="assets/logo/Wedding Bells Logo.png" alt="logo" class="logo"></a>
            <label for="btn" class="icon">
                <span class="fa fa-bars"></span>
            </label>
            <input type="checkbox"id="btn">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>
                    <label for="btn-1" class="shows">Vendors +</label>
                    <a href="#vendors">Vendors</a>
                    <input type="checkbox" id="btn-1">
                    <ul>
                        <li class="itemhidden"><a href="#">Vendors</a></li>
                        <li><a href="#">Bridal Wear</a></li>
                        <li><a href="#">Groom Wear</a></li>
                        <li><a href="#">Beauticians/Saloons</a></li>
                        <li><a href="#">Wedding Jewelry</a></li>
                        <li><a href="#">Ashtaka</a></li>
                        <li><a href="#">Wedding Cakes</a></li>
                        <li><a href="#">Stationary</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Vehicle Hire</a></li>
                        <li><a href="#">Ashtaka</a></li>
                        <li><a href="#">Wedding Cakes</a></li>
                        <li><a href="#">Wedding Venues</a></li>
                        <li><a href="#">Studio</a></li>
                        <li><a href="#">Wedding Planner</a></li>
                        <li><a href="#">Wedding Shoes</a></li>
                        <li><a href="#">Wedding Decors</a></li>
                    </ul>
                 </li>


                <li><a href="quicksearch.html">Quick Search</a></li>
                <li><a href="advertise.html">Advertise</a></li>
                <li><a href="contactus.html">Contact</a></li>
                <li><a href="loging-register.html">Login/Register</a></li>

            </ul>
        </nav>
    </header>





    <!-- ----------------------------------------------------numbers------------------------------------------------ -->

    <section class="numbers text-center" id="testimonials">
        <br><br>
        <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="2000" >

            <!-- <div class="col-md-3 cols-sm-7">
            <img src="images/cus_dashboard/pngwing.com (8) (2).png" alt="" srcset="" width="180px">
            <p class="count fs-30 color-fff fw-700">10471</p>
            <h3 class="color-aaa"> + REGISTERED VENDORS</h3>
            </div>

            <div class="col-md-3 cols-sm-7">
            <i class="fas fa-sitemap"></i>
            <p class="count fs-35 color-fff fw-700">17</p>
            <h3 class="color-aaa"> + CATEGORIES</h3>
            </div>

            <div class="col-md-3 cols-sm-7">
            <i class="fa fa-users"></i>
            <p class="count fs-35 color-fff fw-700">1,21,236</p>
            <h3 class="color-aaa"> + AVERAGE MONTHLY VISITORS</h3>
            </div>

            <div class="col-md-3 cols-sm-7">
            <i class="fas fa-chart-line"></i>
            <p class=" count fs-35 color-fff fw-700">5</p>
            <h3 class="color-aaa"> +YEARS OF EXPERIENCE</h3>
            </div> -->


            <div class="col-md-12 d-flex justify-content-center animate__animated animate__bounceInDown animate__delay-1.5s animate_duration-2s">
            <div class="col-md-6 col-sm-12 d-flex justify-content-between">

                <img class="rounded-circle shadow-4-strong" alt="avatar1" src="images/cus_dashboard/pngwing.com (8) (2).png" width="220px" />

                <img class="rounded-circle shadow-4-strong" alt="avatar2" src="images/cus_dashboard/pngwing.com (8) (4).png" width="220px" />
            </div>
            </div>
            <div class="col-md-12 couple-header d-flex justify-content-center animate__animated animate__bounceInDown animate__delay-1.5s">
                <h2>John & Shona</h2>
            </div>

            <div class="col-md-12 d-flex justify-content-center align-content-center mb-3">
                <div class="wedding_date"> 2023/01/28</div>
            </div>

            <div class="col-md-12 d-flex justify-content-center align-content-center">
                <!-- <div class="rounded-circle text-center nums animate__animated animate__pulse animate__delay-2s mx-4" style="width: 100px; height: 100px;">
                    <span>11</span>
                    <span class="desc">Days</span>
                </div>
                <div class="rounded-circle text-center nums animate__animated animate__pulse animate__delay-2s mx-4" style="width: 100px; height: 100px;">
                    <span>11</span>
                    <span class="desc">Hours</span>
                </div>
                <div class="rounded-circle text-center nums animate__animated animate__pulse animate__delay-2s mx-4" style="width: 100px; height: 100px;">
                    <span>11</span>
                    <span class="desc">Minutes</span>
                </div>
                <div class="rounded-circle text-center nums animate__animated animate__pulse animate__delay-2s mx-4" style="width: 100px; height: 100px;">
                    <span>11</span>
                    <span class="desc">Seconds</span>
                </div> -->

                <div class="simply-countdown simply-countdown-one"></div>
            </div>





        </div>
        <!-- <div class="row">
            <div class="clock-header">
            <div class="badge">
                <h2>FOR NOW!</h2>
            </div>
            <div class="clock">
                <span id="hour"></span> :
                <span id="minute"></span> :
                <span id="second"></span><br>
                <span id="date"> </span> -
                <span id="month"> </span> -
                <span id="year"></span>

            </div> -->
        </div>
        </div>
        </div>
        </div>
    </section>



  <div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2 text-center fh5co-heading welcome">
            <h2>Hello!</h2>
            <h4>This Your Dashboard</h4>
            <p>Everything you need is right here. Enjoy every moment</p>
        </div>
    </div>

    <div class="row d-flex justify-content-center align-content-center my-5">

        <div class="col-md-3 col-sm-12 pt-5">
            <h3 class="welcome_couple">John</h3>
        </div>
        <div class="col-md-5">
            <img class="rounded-circle animate__animated animate__pulse profile_img" alt="avatar1" src="images/cus_dashboard/pngwing.com (8) (2).png" width="220px" />
            <p class="heart text-center"><i class="fas fa-heart"></i></p>
            <img class="rounded-circle animate__animated animate__pulse profile_img" alt="avatar1" src="images/cus_dashboard/pngwing.com (8) (4).png" width="220px" />
        </div>

        <div class="col-md-3 col-sm-12 py-5">
            <h3 class="welcome_couple">Shonaa</h3>
        </div>

    </div>
  </div>



<div class="container">
  <div class="row">
    <div class="col-xl-3 col-sm-6 col-12 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center">
            <i class="fas fa-heart text-primary fa-3x"></i>
            </div>
            <div class="text-end">
              <h3>70</h3>
              <p class="mb-0">Total Guests</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <i class="fas fa-heart text-primary fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>70</h3>
                <p class="mb-0">Total Guests</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <i class="fas fa-heart text-primary fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>70</h3>
                <p class="mb-0">Total Guests</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <i class="fas fa-heart text-primary fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>70</h3>
                <p class="mb-0">Total Guests</p>
              </div>
            </div>
          </div>
        </div>
      </div>


  </div>
</div>

<section>
    <div class="container py-5">
      <h4 class="text-center mb-5"><strong>Service Suppliers</strong></h4>

      <div class="row d-flex justify-content-center">
        <div class="col-lg-2 col-md-12 mb-4 ms-2 cat_wrapper">
            <div class="content">
                <img src="images/icons/vendors/tableware_100px.png" alt="image" class="vendor_icon">
                <p>Caterings</p>
                <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
            </div>
            <div class="overlay">
                <div class="content">
                    <img src="images/icons/vendors/tableware_100px.png" alt="image" class="vendor_icon">
                    <p>Caterings</p>
                    <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-12 mb-4 ms-2 cat_wrapper">
            <div class="content">
                <img src="images/icons/vendors/car_100px.png" alt="image" class="vendor_icon">
                <p>Wedding Cars</p>
                <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
            </div>
            <div class="overlay">
                <div class="content">
                    <img src="images/icons/vendors/car_100px.png" alt="image" class="vendor_icon">
                    <p>Wedding Cars</p>
                    <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-12 mb-4 ms-2 cat_wrapper">
            <div class="content">
                <img src="images/icons/vendors/tableware_100px.png" alt="image" class="vendor_icon">
                <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
            </div>
            <div class="overlay">
                <div class="content">
                    <img src="images/icons/vendors/tableware_100px.png" alt="image" class="vendor_icon">
                    <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-12 mb-4 ms-2 cat_wrapper">
            <div class="content">
                <img src="images/icons/vendors/5 Star Hotel_100px.png" alt="image" class="vendor_icon">
                <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
            </div>
            <div class="overlay">
                <div class="content">
                    <img src="images/icons/vendors/5 Star Hotel_100px.png" alt="image" class="vendor_icon">
                    <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
                </div>
            </div>
        </div>
      </div>



      <!-- <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 cat_wrapper">
            <div class="content">
                <img src="images/icons/vendors/tableware_100px.png" alt="image" class="vendor_icon">
                <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
            </div>
            <div class="overlay">
                <div class="content">
                    <img src="images/icons/vendors/tableware_100px.png" alt="image" class="vendor_icon">
                    <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4 cat_wrapper">
            <div class="content">
                <img src="images/icons/vendors/car_100px.png" alt="image" class="vendor_icon">
                <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
            </div>
            <div class="overlay">
                <div class="content">
                    <img src="images/icons/vendors/car_100px.png" alt="image" class="vendor_icon">
                    <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4 cat_wrapper">
            <div class="content">
                <img src="images/icons/vendors/car_100px.png" alt="image" class="vendor_icon">
                <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
            </div>
            <div class="overlay">
                <div class="content">
                    <img src="images/icons/vendors/car_100px.png" alt="image" class="vendor_icon">
                    <a type="button" class="btn btn-outline-secondary buttonfont" href="#">+ Add</a>
                </div>
            </div>
        </div>

      </div> -->
    </div>
  </section>









<div class="container">
    <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-body bg-transparent border-success text-secondary">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

</div>


<div class="container">
    <div class="card-deck">
        <div class="card bg-light mb-3" style="max-width: 20rem;">
            <div class="card-header">Guest List</div>
                <div class="card-body dash_cards">
                    <div class="d-flex justify-content-center">
                        <img src="images/icons/joining_queue_100px.png" alt="" width="60px">
                    </div>
                <div class="mt-4">
                    <h5 class="card-title ms-4 text-center">You haven't added any guests yet</h5>
                </div>
                <button type="button" class="btn btn-outline-secondary">Add Guests</button>
                </div>
            </div>


            <div class="card bg-light mb-3" style="max-width: 24rem;">
                <div class="card-header">Budget</div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-content-center">
                        <div class="dash_cards">
                            <img src="images/icons/money_bag_ruble_100px.png" alt="" width="60px">
                            <h5 class="card-title mt-2">Estimated Cost</h5>
                            <p class="card-text">10 Laks</p>

                        </div>

                        <div class="dash_cards">
                            <img src="images/icons/fund_accounting_100px.png" alt="" width="60px">
                            <h5 class="card-title mt-2">Final Cost</h5>
                            <p class="card-text">14 Laks</p>
                        </div>
                    </div>
                    <div class="dash_cards">
                        <button type="button" class="btn btn-outline-secondary mt-3">Manage Expanses</button>
                    </div>

                </div>

            </div>
    </div>
</div>




    <!-------------------------------------------Footer Begin---------------------------------------------->
    <footer>
        <div class="container" id="contact">
            <div class="row">
                <div class="col-sm-6 mid-row">
                    <h4>Follow us</h4>
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
                    <h4>Contact us</h4>
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


        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="js/simplyCountdown.min.js"></script>
        <script type="text/javascript" src="js/aos.js"></script>


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

<!-- Count down -->
        <script>
            var d = new Date(new Date().getTime() + 100 * 120 * 120 * 2000);

            // default example
            simplyCountdown('.simply-countdown-one', {
                year: d.getFullYear(),
                month: d.getMonth() + 1,
                day: d.getDate()
            });

            //jQuery example
            $('#simply-countdown-losange').simplyCountdown({
                year: d.getFullYear(),
                month: d.getMonth() + 1,
                day: d.getDate(),
                enableUtc: false
            });
        </script>
<!--End of Count down -->
        <script src="js/clock.js" charset="utf-8"></script>
</body>
</html>
