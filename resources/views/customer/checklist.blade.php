
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Client Checklist</title>

    <link rel="shortcut icon" href="images/favicon/favicon 01 (Copy).png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="css/search.css"> -->
    <!-- <link rel="stylesheet" href="css/aos.css"> -->
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">

    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/mdb.min.css">
    {{-- <link rel="stylesheet" href="css/mk_charts.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="loading-bar.min.css"/> --}}

    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

    <style>


        .todo_cat{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: start !important;
        }

        .gradient-custom-2 {
            /* background: #AA076B;
background: -webkit-linear-gradient(to right, #61045F, #AA076B);
background: linear-gradient(to right, #61045F, #AA076B); */

background-image: linear-gradient(to top, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%);
}


.gradient-custom-3 {
            /* fallback for old browsers */
            background: #7e40f6;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(
                to right,
                rgba(126, 64, 246, 1),
                rgba(80, 139, 252, 1)
            );

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(
                to right,
                rgba(126, 64, 246, 1),
                rgba(80, 139, 252, 1)
            );

}

        .mask-custom {
            background: rgba(24, 24, 16, 0.2);
            border-radius: 2em;
            backdrop-filter: blur(25px);
            border: 2px solid rgba(255, 255, 255, 0.05);
            background-clip: padding-box;
            box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
}


.butt {
	background-color: transparent;
	border-radius:11px;
	border:0px;
	display:inline-block;
	cursor:pointer;
	padding:8px 18px;
}

.essentialbg{
    background-color: #fbeec1 !important;
}

.taskcolor{
    background-color: #f4f6f7 !important;
}

    </style>

@livewireStyles

</head>
<body>

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


            <li><a href="#">Quick Search</a></li>
            <li><a href="advertise.html">Advertise</a></li>
            <li><a href="contactus.html">contact</a></li>
            <li><a href="loging-register.html">Login/Register</a></li>

        </ul>
    </nav>
</header>


<div class="container checklist">
    <div class="checklists" >
        <div class="text-center pt-3 pb-2">
            <img src="images/favicon/check1.webp"
              alt="Check" width="60">
          </div>
      <h1 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50">Check List </h1>
      <h3 data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50" >Only Check List You Want To Manage Your Wedding</h3>
    </div>
</div>



   <!-- Main Container -->
   <div class="container mt-5 pt-3">





    <div class="row pt-1 ">
        <!-- Sidebar -->
        <div class="col-lg-3 pt-4">

            <div class="">
                <!-- Grid row -->
                <div class="row">
                    <!-- by current status -->
                    <livewire:checklist-current-status />
                    <!-- by current status -->


                </div>
                <!-- /Grid row -->

                <!-- Grid row -->
                <div class="row">

                    <!-- by time-period -->
                    <livewire:checklist-status />
                    <!-- by time-period -->




                    <!--  by catagory -->
                    <livewire:checklist-category-status />
                    <!--  by catagory -->





                </div>



                <!-- /Grid row -->
            </div>

        </div>
        <!-- /.Sidebar -->

        <!-- Content -->
        <div class="col-lg-9 gradient-custom-2">

            <!-- Filter Area -->

            <!-- /.Filter Area -->

            <!-- Products Grid -->
            <section class="section pt-4">

                <!-- Grid row -->
                <div class="row">




                    <livewire:progress-bar />




                    <section class="">
                        <div class="container pb-5 h-100 px-0">
                          <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-xl-12 col-md-10">

                              <div class="card gradient-custom-2" style="border-radius: 2em;">
                                <div class="card-body p-5 mask-custom">

                                    <livewire:add-tasks />



                                  <!-- Tabs navs -->
                                  <ul class="nav nav-tabs mb-4 pb-2" id="ex1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link active me-1" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
                                        aria-controls="ex1-tabs-1" aria-selected="true">All</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link me-1" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                                        aria-controls="ex1-tabs-2" aria-selected="false">Done</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link me-1" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab"
                                        aria-controls="ex1-tabs-3" aria-selected="false">To Do</a>
                                    </li>
                                  </ul>
                                  <!-- Tabs navs -->

                                  <!-- Tabs content -->
                                  <div class="tab-content" id="ex1-content">



                                    <!----------------------------------------ALL tab---------------------------------------------- -->
                                    <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel"
                                      aria-labelledby="ex1-tab-1">



                                      <livewire:wedding-checklist />





                                    </div>

<!----------------------------------------Done tab---------------------------------------------- -->
                                    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                        <livewire:done-checklist />
                                    </div>

<!----------------------------------------To Do tab---------------------------------------------- -->
                                    <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                                        <livewire:todo-checklist />
                                    </div>


                                  </div>
                                  <!-- Tabs content -->

                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </section>

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">



                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->


            </section>
            <!-- /.Products Grid -->

        </div>
        <!-- /.Content -->

    </div>

</div>
<!-- /.Main Container -->



<!-------------------------------------------Footer Begin---------------------------------------------->

<footer style="margin-top: 5%;">
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


<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="js/mdb.min.js"></script>
<script src="js/main.js"></script>


<script src="js/smooth-scroll.js"></script>
<script>
  var scroll = new SmoothScroll('a[href*="#"]');
</script>


@livewireScripts
{{-- <script type="text/javascript" src="js/loading-bar.min.js"></script> --}}


{{-- <script>
    $(document).ready(function() {
    $('.tags').select2({
        placeholder:'Select'
        allowClear: true,
    });

    $("#tags").select2({
        ajax:{
            url:"{{ route('get-category') }}",
            type:"post"
            delay:250,
            dataType:'json',
            data:function(params){
                return{
                    name:params.term,
                    "_token":"{{ csrf_token() }}",

                };
        },

        processResults:function(data){
            return{
                results: $.map(data, function (item) {
                    return {
                        id:item.id,
                        text:item.Category_name,
                    }
              })
           };
        },
    },
});
});
</script> --}}
{{-- <script src="js/mk_charts.js"></script> --}}

</body>
</html>
