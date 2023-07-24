
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendors</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon 01 (Copy).png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">



        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
         alpha/css/bootstrap.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css"
         href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <style>

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

/* .pagination a {
  color: white;
  background-color: #24023f;
  border-radius: 50%;
}
.pagination a:active {
  border: cyan solid 3px;
  color: white;
}
/*------
.pagination a:visited {
  background: red;
  border: cyan solid 2px;
  color: white;
}
------*/
/* .pagination a:hover {
    background:linear-gradient(to right,#6e1eee,#f3f3f3);
  color: white;
}
.pagenumbers{
    margin-top: 70px;
} */
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
                <li><a href="contactus.html">Contact</a></li>
                <li><a href="loging-register.html">Login/Register</a></li>

            </ul>
        </nav>
    </header>





    <div class="container ads" id="vendors">

        <h1 data-aos="zoom-in">Your Bookings</h1>
            <h3 data-aos="zoom-in">YOU ARE IN RIGHT PLACE</h3>
            <P><h5>A HANDPICKED COLLECTION OF THE WORLD'S BEST LUXURY WEDDING SUPPLIERS</h5>
               <h5> Featuring The Sri Lankan Best wedding professionals, top wedding planners, and the best magnificent venues.</h5>

                We are here to help your wedding dreams come true with a host of wedding planning tips and recommended suppliers for the discerning bride and groom. Make your wedding and honeymoon one to remember with our amazing collection of dream WEDDING SUPPLIERS.
                From stunning head-turning wedding dresses and dazzling accessories, opulent tableware and floral arrangements, stationery and favours and our amazing wedding venues.</P>

                  </div>




        <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="3000">
            @forelse ($topadsbookings as $normalAd)
            <div class="col-md-4 cards" >
                <div class="card shadows alert-warning" style="width: 20rem;">
                    {{-- <div class="inner">
                        <img class="card-img-top" src="{{ $normalAd->ad_image ? asset('/storage/'.$normalAd->ad_image) : asset('/storage/default_images/default_category_thumb.jpg')  }}" alt="Card image cap">
                    </div>
                        <div class="card-body text-center">
                            <div class="carddata">
                            <h5 class="card-title">{{ $normalAd->ad_title }}</h5>
                            <div class="card-text">{{ Str::words(strip_tags(html_entity_decode($normalAd->about)), 15, '...') }}</div>
                            </div>
                            <a href="{{ route('topAds.show', $normalAd->id) }}" class="more-bttn" style="margin-top: 0 !important;">
                                Visit
                            </a>

                        </div> --}}



                        <div class="inner">
                            <img class="card-img-top" src="{{ $normalAd->ad_image ? asset('/storage/'.$normalAd->ad_image) : asset('/storage/default_images/default_category_thumb.jpg')  }}" alt="Card image cap">
                        </div>
                            <div class="card-body text-center">
                                <div class="carddata">
                                <h5 class="card-title">{{ ucfirst(Str::words($normalAd->ad_title, 8, '...')) }}</h5>
                                {{-- <h5 class="card-title">{{ ucfirst($normalAd->ad_title) }}</h5> --}}
                                <div class="card-text">{{ ucfirst(Str::words(strip_tags(html_entity_decode($normalAd->about)), 15, '...')) }}</div>
                                <div class="bg-dark p-1 text-white mt-3">Main Location: {{ ucfirst($normalAd->v_bus_location)  }}</div>

                                    @if ($normalAd->v_bus_branches)
                                    {{-- <div class="bg-dark p-1 text-white my-1">
                                        Branches : {{ ucfirst(implode(', ', $normalAd->v_bus_branches)) }}<br>
                                    </div> --}}
                                    @endif

                                    <?php
                                    $category_name = DB::table('vendor_categories')
                                        ->select('Category_name')
                                        ->where('id', '=', $normalAd->category_id)
                                        ->value('Category_name');
                                    ?>

                            <div class="bg-secondary p-1 text-white my-1">
                                Category : {{ ucfirst($category_name) }}<br>
                            </div>

                                </div>

                                <div class="card-stats">
                                    <div class="button_container">
                                        <a href="{{ route('topAds.show', $normalAd->id) }}" class="more-bttn" style="margin-top: 20 !important;">
                                            Visit
                                        </a>
                                    </div>
                                </div>
                                </div>



                </div>
            </div>
            @empty
            <div class="alert alert-danger w-100 text-center" role="alert">
                No Vendor Top Ads Available.
            </div>
            @endforelse





            @forelse ($bookings as $normalAd)
            <div class="col-md-4 cards" >
                <div class="card shadows" style="width: 20rem;">
                    <div class="inner">
                        <img class="card-img-top" src="{{ $normalAd->ad_image ? asset('/storage/'.$normalAd->ad_image) : asset('/storage/default_images/default_category_thumb.jpg')  }}" alt="Card image cap">
                    </div>
                        <div class="card-body text-center">
                            <div class="carddata">
                        <h5 class="card-title">{{ ucfirst(Str::words($normalAd->ad_title, 8, '...')) }}</h5>

                           <div class="card-text">{{ ucfirst(Str::words(strip_tags(html_entity_decode($normalAd->about)), 15, '...')) }}</div>
                            <div class="bg-dark p-1 text-white mt-3">Main Location: {{ ucfirst($normalAd->v_bus_location)  }}</div>

                                {{-- @if ($normalAd->v_bus_branches)
                                <div class="bg-dark p-1 text-white my-1">
                                    Branches : {{ ucfirst(implode(', ', $normalAd->v_bus_branches)) }}<br>
                                </div>
                                @endif --}}


                                <?php
                                    $category_name = DB::table('vendor_categories')
                                        ->select('Category_name')
                                        ->where('id', '=', $normalAd->category_id)
                                        ->value('Category_name');
                                ?>

                            <div class="bg-secondary p-1 text-white my-1">
                                Category : {{ ucfirst($category_name) }}<br>
                            </div>

                            </div>

                            <div class="card-stats">
                                <div class="button_container">
                                    <a href="{{ route('advertistments.show', $normalAd->id) }}" class="more-bttn" style="margin-top: 20 !important;">
                                        Visit
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            {{-- </div> --}}
            @empty
            <div class="alert alert-danger w-100 text-center" role="alert">
                No Vendor Ads Available.
            </div>
            @endforelse











        </div>

    </div>



    <div class="clearfix"></div>


    {{-- @if ($allAds== null)
    <div class="paginationa my-5"></div>
    @else
    <div class="paginationa my-5">{{ $allAds->links('pagination::bootstrap-5') }}</div>
    @endif --}}

{{-- @if ($allAds == null)
    <div class="paginationa my-5"></div>
@else
    <div class="paginationa my-5">
        {{ $allAds->appends(['category' => $category, 'location' => $location])->links('pagination::bootstrap-5') }}
    </div>
@endif --}}




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
      </footer>

      <section id="footer">
        <div class="container">
           <p>Copyright © 2020 Wedding Bells. All Rights Reserved. | Design and Develop by #UnknownDev</p>
        </div>
      </div>

      <!-------------------------------------------Footer End---------------------------------------------->
      <script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "newestOnTop": true,
            "positionClass": "toast-top-right",
            "progressBar" : true,
            "preventDuplicates": true,
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

        <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
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
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/smooth-scroll.js') }}"></script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>

</body>
</html>
