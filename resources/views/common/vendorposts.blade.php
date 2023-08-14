<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

$gallery= DB::table('media')->where('v_id', '=', $topAd->v_id)->limit(8)->get();
// var_dump($gallery);
$website_url = DB::table('vendors')
     ->select('v_website_url')
     ->where('user_id', '=', $topAd->v_id)
     ->value('v_website_url');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Listings</title>
    <link rel="shortcut icon" href="images/favicon/favicon 01 (Copy).png" type="image/x-icon">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="{{ asset('css/template2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <style>
      .readbtn:hover{
        text-decoration: none;
        letter-spacing: 1.4px;
        font-weight: 600;
        color: rgb(60, 39, 115);
      }
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

    .card-header{
        background: rgb(232, 182, 249);
    }

    .card-header a:link{
      color: #fff;
    }

    .btn-purple{
      background-color: blueviolet;
    }


    .btn-grad {
            background-image: linear-gradient(to right, #6a3093 0%, #a044ff  51%, #6a3093  100%);
            margin: 10px;
            padding: 8px 15px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: inline-block;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }


          .btn-grad-red {
            background-image: linear-gradient(to right, #e53935 0%, #e35d5b  51%, #e53935  100%);
            margin: 10px;
            padding: 8px 15px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;

          }

          .btn-grad-red:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
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

  @include('components.onlynav');



    <!-- --------------------------------------------------slider---------------------------------------------------------------------------- -->

{{-- <div id="slider">
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
    </div> --}}

<!-- -------------------------------------------------- end of slider-------------------------------------------------------------------------- -->

<div class="container my-5">

  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1">{{ $topAd->ad_title }} {{ $topAd->id }}</h1>
      <p class="lead">{!! html_entity_decode($topAd->about) !!}</p>
      <p class="lead">{!! html_entity_decode($topAd->service_offered) !!}</p>
      <p class="lead">{!! html_entity_decode($topAd->v_package_details) !!}</p>
      <p class="lead" style="font-size: 19px">Packages Start From : Rs.{{ $topAd->start_price }}</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        {{-- <a href="{{ route('clientVendorBookings.create') }}" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Book Now</a> --}}
        {{-- @if (Auth::user())
        <a href="{{ route('clientVendorBookings.show', $topAd->id) }}" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Book Now</a>
        @else
            <a href="{{ route('dashboard') }}?redirect={{ route('clientVendorBookings.show', $topAd->id) }}" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Book Now</a>
        @endif --}}

        @if (Auth::user())
            <a href="{{ route('clientVendorBookings.show', $topAd->id) }}" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Ask For Date</a>
        @else
            @php
                $redirectUrl = route('clientVendorBookings.show', $topAd->id);
                Session::put('redirectUrl', $redirectUrl);
            @endphp

            <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Ask For Date</a>
@endif



        {{-- @if (Auth::user())
    <a href="{{ route('clientVendorBookings.show', $topAd->id) }}" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Book Now</a>
        @else
            <a href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('login-form').submit();" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Book Now</a>
            <form id="login-form" action="{{ route('login') }}" method="POST" style="display: none;">
                @csrf
                <input type="hidden" name="redirect" value="{{ route('clientVendorBookings.show', $topAd->id) }}">
            </form>
        @endif --}}
        <button type="button" class="btn btn-outline-secondary btn-lg px-4 mx-2">Add To Wish List</button>
        {{-- <p>{{ Session::get('redirectUrl') }}</p> --}}
      </div>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg vendorLogo">
        <img class="rounded-lg-3" src="{{ $topAd->ad_image ? asset('/storage/'.$topAd->ad_image) : asset('/storage/default_images/default_category_thumb.jpg')  }}" alt="" width="720">
    </div>
  </div>
</div>

<!--
  --------------------------------------------------Modals For Booking-------------------------------------------------------------------------------
 -->

 <!-- If user is logged -->
<section class="p-1">
    <!-- Modal: modalQuickView -->
    <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-5">
                <!--Carousel Wrapper-->
                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                  data-ride="carousel">
                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="d-block w-100"
                        src="./images/WC_DB/Categories/1. Bridal Wear/1_Salon Manali (Pvt) Ltd/ven001_4.jpg"
                        alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100"
                        src="./images/WC_DB/Categories/1. Bridal Wear/1_Salon Manali (Pvt) Ltd/ven001_5.jpg"
                        alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100"
                        src="./images/WC_DB/Categories/1. Bridal Wear/1_Salon Manali (Pvt) Ltd/ven001_6.jpg"
                        alt="Third slide">
                    </div>
                  </div>
                  <!--/.Slides-->
                  <!--Controls-->
                  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  <!--/.Controls-->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                      <img src="./images/WC_DB/Categories/1. Bridal Wear/1_Salon Manali (Pvt) Ltd/ven001_4.jpg" width="60">
                    </li>
                    <li data-target="#carousel-thumb" data-slide-to="1">
                      <img src="./images/WC_DB/Categories/1. Bridal Wear/1_Salon Manali (Pvt) Ltd/ven001_5.jpg" width="60">
                    </li>
                    <li data-target="#carousel-thumb" data-slide-to="2">
                      <img src="./images/WC_DB/Categories/1. Bridal Wear/1_Salon Manali (Pvt) Ltd/ven001_6.jpg" width="60">
                    </li>
                  </ol>
                </div>
                <!--/.Carousel Wrapper-->
              </div>
              <div class="col-lg-7">
                <h2 class="h2-responsive product-name">
                  <strong>Vendor Post Title</strong>
                </h2>
                <h4 class="h4-responsive">
                  <span class="green-text">
                    <strong>Price range: </strong>
                  </span>
                  <span class="green-text">
                      <strong>Rs.10000 - Rs.50000</strong>
                    </span>
                  </span>
                </h4>

                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                  <!-- Accordion card -->
                  <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne1">
                      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                        aria-controls="collapseOne1">
                        <h5 class="mb-0">
                          Package #1 - Premier Package <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                      </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                      data-parent="#accordionEx">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                        squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div>

                  </div>
                  <!-- Accordion card -->

                  <!-- Accordion card -->
                  <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo2">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                        aria-expanded="false" aria-controls="collapseTwo2">
                        <h5 class="mb-0">
                          Package #2 - Preferred Package <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                      </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                      data-parent="#accordionEx">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                        squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div>

                  </div>
                  <!-- Accordion card -->

                  <!-- Accordion card -->
                  <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree3">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                        aria-expanded="false" aria-controls="collapseThree3">
                        <h5 class="mb-0">
                          Package #3 - Basic Package <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                      </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                      data-parent="#accordionEx">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                        squid. 3
                        wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                      </div>
                    </div>

                  </div>
                  <!-- Accordion card -->

                </div>
                <!-- Accordion wrapper -->


                <!-- Add to Cart -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">

                      <select class="md-form mdb-select colorful-select dropdown-primary" id="pkg">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Package 01</option>
                        <option value="2">Package 02</option>
                        <option value="3">Package 03</option>
                      </select>
                      <label for="pkg" class="mdb-main-label">Select Package</label>

                    </div>
                    <div class="col-md-6">

                      <input type="datetime-local" name="" id="day">
                      <label class="mdb-main-label" for="day">Select Date & Time</label>

                    </div>
                  </div>
                  <div class="text-center">

                    <button type="button" class="btn-grad-red" data-dismiss="modal">Close</button>
                    <button class="btn-grad">Book Now
                      <i class="fas fa-book"></i>
                    </button>
                  </div>
                </div>
                <!-- /.Add to Cart -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- if user is not logged -->
<!-- Button trigger modal-->


<!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center bg-danger">
        <p class="heading text-white">Sorry! You have to be member</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-info-circle fa-4x animated rotateIn mb-4 text-danger"></i>

        <p>If you need to book a vendor you have to create account & need to Sign in.</p>
        <p>Other than booking vendors you can do many things with your membership of our website</p>
        <ul style="display: inline-block;">
          <li>Event Planning</li>
          <li>Create Guest List</li>
          <li>Budget Planning</li>
          <li>Checklists</li>
        </ul>
      </div>

      <!--Footer-->
      <div class="modal-footer d-flex justify-content-center">
        <a href="https://mdbootstrap.com/docs/standard/pro/" class="btn btn-danger btn-md ">Sign in</a>
        <a type="button" class="btn btn-outline-danger btn-md waves-effect" data-dismiss="modal">Register</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalPush-->


<div class="container my-5">

  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-3">

        @foreach ($vendorAds as $vendorAd)
        <?php
        $category = DB::table('vendor_categories')
             ->select('Category_name')
             ->where('id', '=', $vendorAd->category_id)
             ->value('Category_name');
        ?>

        <div class="col-md-6 swiper-slide">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">


                <strong class="d-inline-block mb-2 text-primary">{{ $category  }}</strong>
                <h2 class="mb-0">{{ $vendorAd->ad_title }}</h2>
                <div class="mb-1 text-muted">Price Range : {{ $vendorAd->start_price }}</div>
                {{-- <p class="card-text mb-auto">{!! html_entity_decode($vendorAd->about) !!}</p> --}}
                {{-- <a href="{{ route('topAds.show', $vendorAd->id) }}" class="stretched-link readbtn">Read More</a> --}}

                @if(Route::currentRouteName() === 'topAds.show')
                <a href="{{ route('topAds.show', $vendorAd->id) }}" class="stretched-link readbtn">Read More</a>
                @elseif(Route::currentRouteName() === 'advertistments.show')
                <a href="{{ route('advertistments.show', $vendorAd->id) }}" class="stretched-link readbtn">Read More</a>
                @endif


              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="{{ $vendorAd->ad_image ? asset('/storage/'.$vendorAd->ad_image) : asset('/storage/default_images/default_category_thumb.jpg')  }}" class="rounded-start" alt="..." width="200" height="250px">

              </div>
            </div>
          </div>



        @endforeach


      {{-- <div class="col-md-6 swiper-slide">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Category</strong>
            <h3 class="mb-0">Post Title</h3>
            <div class="mb-1 text-muted">Price Range</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link readbtn">Read More</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="./images/Advertisement/LF_logo2.jpg" class="rounded-start" alt="..." width="200" height="250">

          </div>
        </div>
      </div>

      <div class="col-md-6 swiper-slide">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h3 class="mb-0">Featured post</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link readbtn">Read More</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="./images/WC_DB/Categories/11. Wedding Cakes/53_Lanka Chandani Cake Creations/ven053_23.jpg" class="rounded-start" alt="..." width="200" height="250">

          </div>
        </div>
      </div>

      <div class="col-md-6 swiper-slide">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h3 class="mb-0">Post title</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link readbtn">Read More</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="./images/WC_DB/Categories/11. Wedding Cakes/53_Lanka Chandani Cake Creations/ven053_21.jpg" class="rounded-start" alt="..." width="200" height="250">

          </div>
        </div>
      </div>

      <div class="col-md-6 swiper-slide">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h3 class="mb-0">Post title</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link readbtn">Read More</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="./images/WC_DB/Categories/11. Wedding Cakes/53_Lanka Chandani Cake Creations/ven053_2.jpg" class="rounded-start" alt="..." width="200" height="250">

          </div>
        </div>
      </div>

      <div class="col-md-6 swiper-slide">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h3 class="mb-0">Post title</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link readbtn">Read more</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="./images/WC_DB/Categories/11. Wedding Cakes/53_Lanka Chandani Cake Creations/ven053_7.jpg" class="rounded-start" alt="..." width="200" height="250">

          </div>
        </div>
      </div> --}}

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>


  <div class="container my-5 gallery">
    <h1 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50">See our Works </h1>
    <h3 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50" >Gallery</h3>
    <div class="row mt-4">

        @forelse ($gallery as $gimage)
        <div class="item col-sm-6 col-md-4 mb-3">
            <a href="{{ $gimage->path ? asset('/storage/'.$gimage->path) : asset('/storage/default_images/default_category_thumb.jpg')  }}" alt="{{ $gimage->path }}" class="fancybox" data-fancybox="gallery1">
              <img src="{{ $gimage->path ? asset('/storage/'.$gimage->path) : asset('/storage/default_images/default_category_thumb.jpg')  }}" alt="{{ $gimage->path }}" width="100%" height="100%">
            </a>
          </div>
        @empty
        <div class="alert alert-danger w-100 text-center" role="alert">
            Gallery is empty.
          </div>
        @endforelse





  </div>
  </div>

<!-- <div class="row mb-2">
  <div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">World</strong>
        <h3 class="mb-0">Featured post</h3>
        <div class="mb-1 text-muted">Nov 12</div>
        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="stretched-link">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success">Design</strong>
        <h3 class="mb-0">Post title</h3>
        <div class="mb-1 text-muted">Nov 11</div>
        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="stretched-link">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

      </div>
    </div>
  </div>

</div> -->
</div>


    <!-------------------------------------------Footer Begin---------------------------------------------->


    @include('components.onlyfooter')

      <script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif
      </script>

      <!-------------------------------------------Footer End---------------------------------------------->



      <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/swiper-bundle.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
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
      <script src="{{ asset('js/main.js') }}"></script>
      <script src="{{ asset('js/smooth-scroll.js') }}"></script>
      <script>
          var scroll = new SmoothScroll('a[href*="#"]');
      </script>
      <script src="{{ asset('js/contact.js') }}"></script>


</body>
</html>
