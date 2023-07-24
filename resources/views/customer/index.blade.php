<?php
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

$categories= DB::table('vendor_categories')->limit(6)->get();
$allCategories= DB::table('vendor_categories')->get();
$topAds= DB::table('advertisements')->where('ad_type', '=', '1')->limit(8)->get();

// $website_url = DB::scalar('vendors')->select('v_website_url')->where('c_id', '=', AUTH::id());


$initials ='';

if (Auth::user()) {
    $name = Auth::user()->name; // replace this with the actual name from the database
    $parts = explode(' ', $name); // split the name into parts using the space character as the separator
    $first_letter = strtoupper(substr($parts[0], 0, 1)); // get the first letter of the first name and convert it to uppercase
    $second_letter = isset($parts[1]) ? strtoupper(substr($parts[1], 0, 1)) : ''; // get the first letter of the second name and convert it to uppercase if it exists
    $initials = $first_letter . $second_letter; // concatenate the two initials
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Bells</title>
    <link rel="shortcut icon" href="images/favicon/favicon 01 (Copy).png" type="image/x-icon">

    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.min.css">
    <link rel="stylesheet" href="css/aos.css">
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
                <a href="{{ route('advertistments.index') }}">Vendors</a>
                <input type="checkbox" id="btn-1">
                <ul>
                  <li class="itemhidden"><a href="#">Vendors</a></li>
                  @foreach ($allCategories as $category)
                      <li><a href="{{ route('vendorCategories.show', $category->id) }}">{{ $category->Category_name }}</a></li>
                 @endforeach

               </ul>
           </li>




            <li><a href="#quicksearch">Quick Search</a></li>
            <li><a href="advertise.html">Advertise</a></li>
            <li><a href="contactus.html">Contact</a></li>
            <li><a href="{{ route('clientVendorBookings.index') }}">Bookings</a></li>
            @if (auth()->id())
            <li>
                {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit(); " role="button">
                            Logout
                        </a>
                </form> --}}
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
                    {{-- <img
                      src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                      class="rounded-circle"
                      height="25"
                      alt="Black and White Portrait of a Man"
                      loading="lazy"
                    /> --}}


                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())

                        <img class="rounded-circle"
                        height="25" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" loading="lazy" />

                @else
                <span class="bg-light text-secondary border border-danger rounded-circle p-1">{{ $initials }}</span>
                {{-- <div class="user_avatar">{{ $initials }}</div> --}}
                @endif


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
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <li>
                              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                              this.closest('form').submit(); " role="button">
                          Signout
                          </a>
                          </li>
                      </form>




                   </ul>
               </li>

            </li>
            @else
                <li>
                    <a href="{{ route('login') }}" role="button">
                        Login
                    </a>
                </li>
            @endif
            {{-- <li><a href="loging-register.html">Login/Register</a></li> --}}



         <!-- <div class="btn-group">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            Right-aligned menu example
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><button class="dropdown-item" type="button">Action</button></li>
            <li><button class="dropdown-item" type="button">Another action</button></li>
            <li><button class="dropdown-item" type="button">Something else here</button></li>
          </ul>
        </div> -->

        <!-- <div class="d-flex">
          <div class="dropdown mr-1">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" data-offset="200,20">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                class="rounded-circle"
                height="25"
                alt="Black and White Portrait of a Man"
                loading="lazy"
              />
            </a>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div> -->



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
          <img class="img-fluid" src="images/slider/Index/1.png" >
          <div class="carousel-caption">
            <h1>Welcome To Wedding Bells</h1>
            <p>The Sri Lankan Premium Wedding Resource Directory. </p>


            <button type="button"  id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider1">
              Read more
            </button>
          </div>
        </div>

        <div class="carousel-item">
          <img class="img-fluid" src="images/slider/Index/2.png">
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
          <img class="img-fluid" src="images/slider/Index/3.jpg">
          <div class="carousel-caption">
            <h1>Are you A Vendor?</h1>
            <p>We are here to help your grow your business. Come join with us to advertise</p>

            <button type="button"  id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider3">
              Read more
            </button>
          </div>
        </div>

        <div class="carousel-item">
          <img class="img-fluid" src="images/slider/Index/4.jpg">
          <div class="carousel-caption">
            <h1>Contact Us </h1>
            <P>Build your team with the best wedding professionals</p>

            <button type="button" id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider4">
              Read more
            </button>
          </div>
        </div>


        <div class="carousel-item">
          <img class="img-fluid" src="images/slider/Index/5.png">
          <div class="carousel-caption">
            <h1>Who We Are</h1>
            <p >Begin Planning Your Dream Wedding Day at Wedding Bells & Make Your Big Day Shine.</p>

            <button type="button" id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider5">
              Read more
            </button>
          </div>
        </div>


        <div class="carousel-item">
          <img class="img-fluid" src="images/slider/Index/6.png">
          <div class="carousel-caption">
            <h1>Your Supreme Wedding Planning Solution </h1>
            <p >A Handpicked Collection Of The Local'S Best
              Luxary Wedding Suppliers</p>

            <button type="button" id="vidBtn" class="more-bttn" style="margin-top: -6px;" data-toggle="modal" data-target="#slider6">
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


<!-- ----------------------------------------------------------modal----------------------------------------------------- -->
<!-- Modal slider 1  -->
<div class="modal fade" id="slider1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Welcome to Wedding Bells</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
              <img  src="images/slider/Index/1.png" alt="">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore voluptates dolor,
                laborum nisi molestiae esse numquam.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>



<!-- Modal slider 2  -->
<div class="modal fade" id="slider2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Find Vendors</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
              <img  src="images/slider/Index/2.png" alt="">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore voluptates dolor,
                laborum nisi molestiae esse numquam aliquam rem reprehenderit? Architecto inventore earum
                sit ut nisi saepe natus est amet!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>






<!-- Modal slider 3  -->
<div class="modal fade" id="slider3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADVERTISE WITH US</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                  <img  src="images/slider/Index/3.jpg" alt="">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore voluptates dolor,
                    laborum nisi molestiae esse numquam aliquam rem reprehenderit? Architecto inventore earum
                    sit ut nisi saepe natus est amet!</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
        </div>
      </div>
</div>


<!-- Modal slider 4  -->
<div class="modal fade" id="slider4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">CONTACT US</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
              <img  src="images/slider/Index/4.jpg" alt="">
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore voluptates dolor,
                laborum nisi molestiae esse numquam aliquam rem reprehenderit? Architecto inventore earum
                sit ut nisi saepe natus est amet!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>


<!-- Modal slider 5  -->
<div class="modal fade" id="slider5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">WHO WE ARE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
              <img  src="images/slider/Index/5.png" alt="">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore voluptates dolor,
                laborum nisi molestiae esse numquam aliquam rem reprehenderit? Architecto inventore earum
                sit ut nisi saepe natus est amet!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>


<!-- Modal slider 6  -->
<div class="modal fade" id="slider6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SRI LANKAN'S NO 1</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
              <img  src="images/slider/Index/6.png" alt="">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore voluptates dolor,
                laborum nisi molestiae esse numquam aliquam rem reprehenderit? Architecto inventore earum
                sit ut nisi saepe natus est amet!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>




<!----------------------------------- services---------------------------------------------->

<div class="container ">
<div class="partners" >

  <h1 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50">Start planning your wedding</h1>
  <h3 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50" >Everything you need is right here. Enjoy every moment.</h3>
  <p>{{ Session::get('redirectUrl') }}</p>
</div>

<!-- Card deck -->
<div class="card-deck main-ser">

  <!-- Card -->
  <div class="card mb-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/slider/image4.jpg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body card-body-cascade text-center pb-0">

      <!--Title-->
      <h4 class="card-title">Budget Planner</h4>
      <!--Text-->
      <p class="card-text">Budget Plan tool provide you program to evaluate actual paid and due amount.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="more-bttns">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/slider/image2.jpg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body card-body-cascade text-center pb-0">

      <!--Title-->
      <h4 class="card-title">Guest List</h4>
      <!--Text-->
      <p class="card-text">Make list for your guests and collect email addressses and send free invitation.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="more-bttns">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/slider/fvtyw.png"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body card-body card-body-cascade text-center pb-0">

      <!--Title-->
      <h4 class="card-title">Check List</h4>
      <!--Text-->
      <p class="card-text">Get your sorted list with Check List planning tool each list status wise.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="more-bttns">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <div class="card mb-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/slider/wedding-planers-pritz-miracle-weddings-entertainment-wedding-decor-8_15_313137-159160302581222.jpeg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body card-body card-body-cascade text-center pb-0">

      <!--Title-->
      <h4 class="card-title">Event Planner</h4>
      <!--Text-->
      <p class="card-text">Get your sorted list with Check List planning tool each list status wise.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="more-bttns">Read more</button>

    </div>

  </div>
  <!-- Card -->

</div>
<!-- Card deck -->

</div>



<!-- -------------------------------------------------------------about------------------------------------------------------- -->


<div class="container ">


<!------------------------------------------Searchbar---------------------------------------->
<section class="search-bar">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
            <div class="p-1 bg-light shadow-sm">

                <form action="{{ route('ads.index') }}" method="GET">
                    <div class="input-group">
                    <input type="search" name="vendorName" placeholder="search by vendor Name" class="form-control searchbarz">
                    <input type="hidden" name="vCategory">
                    <div class="input-group-append">
                      <!-- Example single danger button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-outline-secondary ven_cat_btn dropdown-toggle searchdropbtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-tag mr-2"></i> </i>Vendor category
                          </button>
                          <div class="dropdown-menu layer">


                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fas fa-user-friends"></i> All Vendors</a>
                            @forelse ($allCategories as $category)
                            <a class="dropdown-item" data-value="{{ $category->id }}">{{ $category->Category_name }}</a>
                            @empty
                            <a class="dropdown-item">No Categories</a>
                            @endforelse
                          </div>
                        </div>
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>

              </div>
            </div>
        </div>


    </div>
  </div>
</section>



  <div class="about" id="about">
    <h1 data-aos="zoom-in">SRI LANKA’S NO. 1 WEDDING RESOURCE DIRECTORY</h1>
    <h3 data-aos="zoom-in">POPULAR WEDDING SERVICE CATEGORIES</h3>
    <p data-aos="zoom-in">Let’s face it, planning a wedding is never, ever going to be easy. There’s a million and one things to think about, and if you forget something, it can really come back to cause trouble later on. Weddings are hugely important, and can cost well in the tens of thousands. No wonder they’re so stressful to plan!
      That being said, here are the ways the right wedding directory can take some of that sting out of the planning of your wedding.
      TAKE THE PANIC OUT OF PLANNING; Imagine everything you need, all in one place. GIVE YOUR WEDDING A UNIQUE FEEL EXPLORING NEW IDEAS </p>

       <div class="row" >

             @foreach ($categories as $category)

                <div class="col-md-4 about_grid " style="background-color: rgba(0, 0, 0, 0); background-image: url({{  $category->Category_image != null  ? asset('/storage/'.$category->Category_image)  : asset('/storage/default_images/default_category_thumb.jpg') }} ); background-size: cover; background-position: center center; width: 100%; height: 250px; opacity: 1; visibility: inherit; z-index: 20;" data-aos="zoom-in" data-aos-duration="2000">
                    <i class="fa fa-heart mb-5"></i>
                    <h4 class="mb-2">{{$category->Category_name}}</h4>
                    <p class="cat-pargraph"></p>
                    <a href="{{ route('vendorCategories.show', $category->id) }}" class="more-bttn my-2">
                      View More
                    </a>
                  </div>

             @endforeach

             <div class="container d-flex justify-content-center">
                <a href="{{ route('vendorCategories.index') }}" class="btn btn-outline-secondary btn-block" style="margin-top: 5rem !important">
                    View All Categories
                  </a>
             </div>





       </div>
  </div>
</div>





<!-- ----------------------------------------------------------Partners Advertistment------------------------------------------------------------------------ -->
<br><br><br><br>
<div class="clr"></div>
@if($topAds)
<section class="Parner_ads_area">
<div class="container partnerads" id="partner">
  <div class="partners" >

    <h1 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50">FEATURED ADVERTISEMENTS </h1>
    <h3 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50" >Our Quality Partners</h3>
  </div>
  <div class="row" data-aos="zoom-in" data-aos-duration="1000">
    <div class="col-md-12">

      <div id="product-slider" class="owl-carousel">

        @foreach ($topAds as $topAd)
        <div class="post-slide">
            <ul class="post-info">
           <?php
            $website_url = DB::table('vendors')
                 ->select('v_website_url')
                 ->where('user_id', '=', $topAd->v_id)
                 ->value('v_website_url');
            ?>
              <li><i class="fa fa-tag"></i><a href="{{ $website_url }}">Visit</a></li>

            </ul>

            <div class="post-img" >
              <img src="{{ $topAd->ad_image ? asset('/storage/'.$topAd->ad_image) : asset('/storage/default_images/default_category_thumb.jpg')  }}" alt="">
              <a href="" class="read">read more</a>
            </div>

            <div class="post-content">
              <span class="post-author">
                <a href=""><img src="{{ $topAd->logo_image ? asset('/storage/'.$topAd->logo_image) : asset('/storage/default_images/default_category_thumb.jpg')  }}" alt="" class="post-author-img"></a>
              </span>
              <a href="{{ route('advertistments.show', $topAd->id) }}" class="btn btn-outline-secondary btn-block my-1">
                View More
              </a>
              <h3 class="post-title">{{ $topAd->ad_title }}</h3>

              {{-- <p class="post-description"> {!! html_entity_decode($topAd->about) !!}</p> --}}
            </div>
          </div>
        @endforeach



      </div>
    </div>
  </div>
</div>
</section>
@endif


<!-- -----------------------------------------------------Full Screen Video Banner--------------------------------------------------------- -->
<br>

<section class="showcase">
    <div class="video-container">
        <video src="assets/videoslider/1.mp4" autoplay muted loop></video>
    </div>
    <div class="content">
        <h1 class="videoh1" data-aos="zoom-in">Connect With Us</h1>
        <h3 data-aos="zoom-in">We bring your ideas to life</h3>
        <a href="#quicksearch" class="btn2" data-aos="flip-left" data-aos-duration="2000">Find</a>
    </div>

    <!------------------------------------------Searchbar
<section class="search-bar" data-aos="fade-up" data-aos-duration="3000">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
          <form>
            <div class="p-1 bg-light shadow-sm">
              <div class="input-group">
                <input type="search" placeholder="search by vendor name" class="form-control">
                <div class="input-group-append">

                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-tag mr-2"></i>Vendor category
                      </button>
                      <div class="dropdown-menu layer">
                        <a class="dropdown-item" href="#"><i class="fas fa-female mr-2"></i>Bridal Wear</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-user-secret mr-2"></i>Grooms wear</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-user-circle mr-2"></i>Beauticians/Saloons</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-camera-retro mr-2"></i>Studios</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-hotel  mr-2"></i>Wedding Venues</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-birthday-cake mr-2"></i>Cake & Cake Structures</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fas fa-user-friends"></i>All Vendors</a>
                      </div>
                    </div>
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>
                    </div>
                </div>
              </div>
            </div>
          </form>
      </div>

    </div>
  </div>
</section>
---------------------------------------->
</section>


<div class="searchbarheader" id="quicksearch">
    <form action="{{ route('advertistments.index') }}" method="GET">
    <h1 class="searchh1" data-aos="fade-up" data-aos-duration="2000">Find <span class="searcher">VENDORS</span> THAT YOU <span class="searcher">WANT</span></h1>
    <div class="form-box">


            <select class="search-field vendor" name="category" id="select">
              <option disable hidden value="">Vendor Categories</option>
              @forelse ($allCategories as $category)
              <option value="{{ $category->id }}">{{ $category->Category_name }}</option>
              @empty
              <option value="">No Categories Available</option>
              @endforelse
                </select>
      <input class="search-field location" name="location" type="text" placeholder="Location"/>
      <button type="submit" class="search-btn">Find</button>

    </div>
  </form>
</div>


<!-- -----------------------------------------------------About US--------------------------------------------------------- -->
<section id="about">
  <div class="abouts" >

    <h1 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50">ABOUT </h1>
    <h3 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50">Who We Are</h3>
    <p data-aos="zoom-in">
      Planning your special day, which forms one of the greatest milestones in one’s life can be a challenging task for even the most organised.
Within this online Wedding Bells Resource Directory we aim to provide you will all the information and ideas necessary to make this experience an unforgettable one.
From the finer details of bride and groom wear to venues, saloons and etc is right here; you will find exactly what you have been  looking so far easily from here.
Everything is in the planning which will eventually make the day magical and a true celebration of love.
Do not rush this planning process, there are plenty of wedding businesses advertising in Sri Lanka, each one unique and offering something valuable..
  </p>
  </div>

</section>

<section id="aboutus">
  <div class="about-left-col">
      <img src="images/about/services1.png" alt="About BG" class="services-img" data-aos="fade-up" data-aos-duration="3000" object-fit: contain;>
  </div>
  <div class="about-right-col">
      <div class="about-text">
          <h1 class="mainheader" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50">SERVICE WE ARE OFFERING</h1>
          <span class="square"></span>
          <p class="blogpost"  data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50" text-justify="auto">
            <h4>Build your team with the best wedding professionals</h4>
            For your wedding day, you want the best wedding professionals, the best venue, the best dresses, the best honeymoon.
            In this mammoth industry, you need to know where you can find the quality over the quantity, the style and the substance, the real deal.
            For that reason, you can trust that  Wedding bells Resource Directory features only the suppliers who come personally recommended by us.
          </p>
          <h2 class="blogpost" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50">You can Find thousand of Vendors in Any of these Categories</h2>
            <div class="list" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50" >
            <li class="sideul">Bridal Wear</li>
            <li class="sideul">Groom Wear</li>
            <li class="sideul">Beauticians/Saloons</li>
            <li class="sideul">Wedding Jewelry</li>
            <li class="sideul">Shoes</li>
            <li class="sideul">Wedding Planner</li>
            <li class="sideul">Wedding Venues</li>
            <li class="sideul">Wedding Decors</li>
            <li class="sideul">Studios</li>
            <li class="sideul">Ashtaka</li>
            <li class="sideul">Wedding Cakes</li>
            <li class="sideul">Stationary</li>
            <li class="sideul">Entertainment</li>
            <li class="sideul">Vehicle Hire</li>
            <li class="sideul">Honeymoon Venues</li>
          </div>
         <br>
          <div class="line">
            <span class="line1"></span><br>
            <span class="line2"></span><br>
            <span class="line3"></span><br>
          </div>
      </div>
  </div>
</section>



<!------------------------------------ Section: reviews------------------------------------------->




<div class="clearfix"></div>

<div class="partners" >

  <h1 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50">Words from Happy Custormers </h1>
  <h3 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50" >Reviews</h3>
</div>


<div class="demo">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div id="testimonial-slider" class="owl-carousel">
                  <div class="testimonial">
                      <span class="icon fas fa-quote-left"></span>
                      <p class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                      </p>
                      <div class="testimonial-content">
                          <div class="pic"><img src="images/reviews/img 1.webp" alt=""></div>
                          <h3 class="title">williamson</h3>
                          <span class="post">Web Developer</span>
                      </div>
                  </div>
                  <div class="testimonial">
                      <span class="icon fa fa-quote-left"></span>
                      <p class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                      </p>
                      <div class="testimonial-content">
                          <div class="pic"><img src="images/reviews/img 2.webp" alt=""></div>
                          <h3 class="title">Kristina</h3>
                          <span class="post">Web Designer</span>
                      </div>
                  </div>
                  <div class="testimonial">
                      <span class="icon fa fa-quote-left"></span>
                      <p class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                      </p>
                      <div class="testimonial-content">
                          <div class="pic"><img src="images/reviews/img 6.jpg" alt=""></div>
                          <h3 class="title">Steve Thomas</h3>
                          <span class="post">Web Developer</span>
                      </div>
                  </div>

                  <div class="testimonial">
                    <span class="icon fa fa-quote-left"></span>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                    </p>
                    <div class="testimonial-content">
                        <div class="pic"><img src="images/reviews/img 1.webp" alt=""></div>
                        <h3 class="title">williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
                </div>
                <div class="testimonial">
                    <span class="icon fa fa-quote-left"></span>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                    </p>
                    <div class="testimonial-content">
                        <div class="pic"><img src="images/reviews/img 2.webp" alt=""></div>
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                    </div>
                </div>
                <div class="testimonial">
                    <span class="icon fa fa-quote-left "></span>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                    </p>
                    <div class="testimonial-content">
                        <div class="pic"><img src="images/reviews/img 6.jpg" alt=""></div>
                        <h3 class="title">Steve Thomas</h3>
                        <span class="post">Web Developer</span>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>



<div id="calendar"></div>





<div class="section">
  <div class="container">
    <div class="comment">
      <div id="disqus_thread"></div>
    </div>

  </div>

</div>


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


<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>

<script>
    $(document).ready(function() {
      $(".dropdown-item").click(function() {
        var selectedValue = $(this).attr('data-value');
        $("input[name='vCategory']").val(selectedValue);
      });
    });
  </script>

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

<script src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>

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


</body>
</html>
