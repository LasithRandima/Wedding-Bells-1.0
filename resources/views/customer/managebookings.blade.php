<?php
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Listings</title>
    <link rel="shortcut icon" href="images/favicon/favicon 01 (Copy).png" type="image/x-icon">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/template2.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
    alpha/css/bootstrap.css" rel="stylesheet">

    {{-- <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    {{-- <script>
        var jQ = jQuery.noConflict();
    </script> --}}

   <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


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

    @media only screen and (min-width: 769px) and (max-width: 991px){
      .btn-flex{
        flex-direction: column;
      }
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
    </div>

<!-- -------------------------------------------------- end of slider-------------------------------------------------------------------------- -->


<div class="container py-5">

<div class="row row-cols-1 row-cols-md-2 g-4">
    @forelse ($topadsbookings as $normalAd)
  <div class="col">
    <div class="card mb-3 rounded-3 border shadow-lg" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4 vendorLogo">

          <img src="{{ $normalAd->ad_image ? asset('/storage/'.$normalAd->ad_image) : asset('/storage/default_images/default_category_thumb.jpg')  }}" class="rounded-start" alt="Card image">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ ucfirst(Str::words($normalAd->ad_title, 8, '...')) }}</h5>
            <h6 class="card-title">{{ ucfirst(Str::words($normalAd->vBusinessName, 8, '...')) }}</h6>
            <div class="card-text">{{ ucfirst(Str::words(strip_tags(html_entity_decode($normalAd->about)), 20, '...')) }}</div>
            <div class="card-text mt-3"><small class="text-muted">Booked Date : {{ $normalAd->event_date }}</small></div>
            <div class="card-text"><small class="text-muted">Booked Time : {{ $normalAd->event_start_time }} - {{ $normalAd->event_end_time }}</small></div>
            <?php
            $pkg_name = DB::table('adpackages')->where('id', $normalAd->pkg_id)->value('pkg_name');
            ?>
            <div class="card-text"><small class="text-muted">Package : {{ $pkg_name ? $pkg_name : 'No Package Selected Yet' }}</small></div>
            <div class="card-text"><span class="badge badge-info">Booking Status : {{ $normalAd->booking_status }}</span></div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">


        <div class="d-flex justify-content-center btn-flex">
            @if ($normalAd->booking_status == 'approved')
            {{-- $topAdId = $normalAd->id; --}}

            {{-- <button type="button" class="btn btn-primary btn-sm px-4 me-md-2 fw-bold mt-3" data-toggle="modal" data-target="#modalQuickView" data-top-ad-id="{{ $normalAd->id }}">Books</button> --}}
            <button type="button" class="btn btn-primary btn-sm px-4 me-md-2 fw-bold mt-3" data-toggle="modal" data-target="#modalQuickView" data-top-ad-id="{{ $normalAd->ad_id }}" data-booking-id="{{ $normalAd->id }}" data-booking-eventdate="{{ $normalAd->event_date }}" data-booking-eventstarttime="{{ $normalAd->event_start_time }}" data-booking-eventendtime="{{ $normalAd->event_end_time }}" data-booking-package="{{ $normalAd->pkg_id }}" data-url="{{ route('cusbookings.packages', $normalAd->ad_id) }}">Book</button>
            {{-- <a class="btn btn-primary btn-sm px-4 me-md-2 fw-bold mt-3" href="{{ route('cusbookings.packages', $normalAd->ad_id) }}">Book</a> --}}
            {{-- <a
            href="javascript:void(0)"
            id="show-user"
            data-url="{{ route('cusbookings.packages', $normalAd->id-1) }}"
            class="btn btn-primary btn-sm px-4 me-md-2 fw-bold mt-3"
            >Show</a> --}}

            @endif

            @if ($normalAd->booking_status == 'booked')
            <button type="button" class="btn btn-primary btn-sm px-4 me-md-2 fw-bold mt-3" data-toggle="modal" data-target="#modalQuickView" data-top-ad-id="{{ $normalAd->ad_id }}" data-booking-id="{{ $normalAd->id }}" data-booking-eventdate="{{ $normalAd->event_date }}" data-booking-eventstarttime="{{ $normalAd->event_start_time }}" data-booking-eventendtime="{{ $normalAd->event_end_time }}" data-booking-package="{{ $normalAd->pkg_id }}" data-url="{{ route('cusbookings.packages', $normalAd->ad_id) }}">Change Booking</button>
            @endif

            </form>

                <!-- Cancel or Delete Form -->
            <form action="{{ route('bookings.requestcancel', $normalAd->id) }}" method="post">
                    @csrf
                    @method('put')

            @if ($normalAd->booking_status == 'cancelled')
                <!-- Show Delete Button -->
                <button type="button" class="btn btn-outline-danger btn-sm px-4 mx-2 mt-3" onclick="deleteTopBooking({{ $normalAd->id }})">Delete Request</button>
                @elseif($normalAd->booking_status !== 'booked')
                <!-- Show Cancel Button -->
                <button type="submit" class="btn btn-outline-danger btn-sm px-4 mx-2 mt-3">Cancel Request</button>
                @elseif($normalAd->booking_status == 'booked')
                <!-- Show Cancel Button -->
                <button type="button" class="btn btn-outline-danger btn-sm px-4 mx-2 mt-3" onclick="deleteBooking({{ $normalAd->id }})">Cancel Booking</button>

            @endif

        </form>

        </div>

    <!-- Form for Delete Button (Hidden) -->
    <form id="delete-form-{{ $normalAd->id }}" action="{{ route('clientVendorBookings.destroy', $normalAd->id) }}" method="post" style="display: none;">
        @csrf
        @method('delete')
    </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @empty
  <div class="alert alert-danger w-100 text-center" role="alert">
      No Bookings Available.
  </div>
  @endforelse



  @forelse ($bookings as $normalAd)
  <div class="col">
    <div class="card mb-3 rounded-3 border shadow-lg" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4 vendorLogo">

          <img src="{{ $normalAd->ad_image ? asset('/storage/'.$normalAd->ad_image) : asset('/storage/default_images/default_category_thumb.jpg')  }}" class="rounded-start" alt="Card image">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ ucfirst(Str::words($normalAd->ad_title, 8, '...')) }}</h5>
            <h6 class="card-title">{{ ucfirst(Str::words($normalAd->vBusinessName, 8, '...')) }}</h6>
            <div class="card-text">{{ ucfirst(Str::words(strip_tags(html_entity_decode($normalAd->about)), 20, '...')) }}</div>
            <div class="card-text mt-3"><small class="text-muted">Booked Date : {{ $normalAd->event_date }}</small></div>
            <div class="card-text"><small class="text-muted">Booked Time : {{ $normalAd->event_start_time }} - {{ $normalAd->event_end_time }}</small></div>
            <?php
            $pkg_name = DB::table('adpackages')->where('id', $normalAd->pkg_id)->value('pkg_name');
            ?>
            <div class="card-text"><small class="text-muted">Package : {{ $pkg_name ? $pkg_name : 'No Package Selected Yet' }}</small></div>

            <div class="card-text"><span class="badge badge-info">Booking Status : {{ $normalAd->booking_status }}</span></div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">

                            <!-- Cancel or Delete Form -->

        <div class="d-flex justify-content-center btn-flex">
            @if ($normalAd->booking_status == 'approved')
            {{-- <button type="button" class="btn btn-primary btn-sm px-4 me-md-2 fw-bold mt-3" data-toggle="modal" data-target="#modalQuickView" data-top-ad-id="{{ $normalAd->id }}">Books</button> --}}
            <button type="button" class="btn btn-primary btn-sm px-4 me-md-2 fw-bold mt-3" data-toggle="modal" data-target="#modalQuickView" data-top-ad-id="{{ $normalAd->ad_id }}" data-booking-id="{{ $normalAd->id }}" data-booking-eventdate="{{ $normalAd->event_date }}" data-booking-eventstarttime="{{ $normalAd->event_start_time }}" data-booking-eventendtime="{{ $normalAd->event_end_time }}" data-booking-package="{{ $normalAd->pkg_id }}" data-url="{{ route('cusbookings.packages', $normalAd->ad_id) }}">Book</button>

            {{-- <a class="btn btn-primary btn-sm px-4 me-md-2 fw-bold mt-3" href="{{ route('cusbookings.packages', $normalAd->ad_id) }}">Book</a> --}}

            {{-- <a
                        href="javascript:void(0)"
                        id="show-user"
                        data-url="{{ route('cusbookings.packages', $normalAd->id-1) }}"
                        class="btn btn-primary btn-sm px-4 me-md-2 fw-bold mt-3"
                        >Show</a> --}}

            @endif

            @if ($normalAd->booking_status == 'booked')
            <button type="button" class="btn btn-primary btn-sm px-4 me-md-2 fw-bold mt-3" data-toggle="modal" data-target="#modalQuickView" data-top-ad-id="{{ $normalAd->ad_id }}" data-booking-id="{{ $normalAd->id }}" data-booking-eventdate="{{ $normalAd->event_date }}" data-booking-eventstarttime="{{ $normalAd->event_start_time }}" data-booking-eventendtime="{{ $normalAd->event_end_time }}" data-booking-package="{{ $normalAd->pkg_id }}" data-url="{{ route('cusbookings.packages', $normalAd->ad_id) }}">Change Booking</button>
            @endif

            <form action="{{ route('bookings.requestcancel', $normalAd->id) }}" method="post">
                @csrf
                @method('put')
            @if ($normalAd->booking_status == 'cancelled')
                <!-- Show Delete Button -->
                <button type="button" class="btn btn-outline-danger btn-sm px-4 mx-2 mt-3" onclick="deleteBookingRequest({{ $normalAd->id }})">Delete Request</button>
            @elseif($normalAd->booking_status !== 'booked')
                <!-- Show Cancel Button -->
                <button type="submit" class="btn btn-outline-danger btn-sm px-4 mx-2 mt-3">Cancel Request</button>
            @elseif($normalAd->booking_status == 'booked')
                <!-- Show Cancel Button -->
                <button type="button" class="btn btn-outline-danger btn-sm px-4 mx-2 mt-3" onclick="deleteBooking({{ $normalAd->id }})">Cancel Booking</button>
            @endif
        </form>
        </div>


    <!-- Form for Delete Button (Hidden) -->
    <form id="delete-form-{{ $normalAd->id }}" action="{{ route('clientVendorBookings.destroy', $normalAd->id) }}" method="post" style="display: none;">
        @csrf
        @method('delete')
    </form>

    <!-- Form for Delete Button (Hidden) -->
    <form id="delete-booking-form-{{ $normalAd->id }}" action="{{ route('clientVendorBookings.destroy', $normalAd->id) }}" method="post" style="display: none;">
        @csrf
        @method('delete')
    </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @empty
  <div class="alert alert-danger w-100 text-center" role="alert">
      No current Bookings Available.
  </div>
  @endforelse




</div>


</div>


<!-------------------------------------Modal Section For Change Bookings----------------------------------------------------->


<section class="p-1">
  <!-- Modal: modalQuickView -->
  <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">

            {{-- <script>
                $(document).ready(function() {
                    $('#modalQuickView').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget);
                        var topAdId = button.data('top-ad-id');

                        console.log(topAdId); // Check if this prints the value

                    //     $.ajax({
                    //     url: 'http://wedding-bells-1.0.test/clientBookings/packges',
                    //     type: 'GET',
                    //     data: { adId: topAdId },
                    //     success: function(response) {
                    //         console.log(response);
                    //         // Assuming the server returns the formatted HTML content for the modal:
                    //         // $('.modal-content').html(response);
                    //     }
                    // });
                    });
                });


            </script> --}}

            {{-- <script>
                $(document).ready(function() {
                    $('#modalQuickView').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget);
                        var AdId = button.data('top-ad-id');
                        var topAdId = AdId;
                        var url = button.data('url'); // Retrieve the URL from data-url attribute
                        console.log(topAdId); // Check if this prints the value
                        console.log(url); // Check if this prints the value

                        $.ajax({
                            url: url,
                            type: 'GET',
                            dataType: 'json',
                            // data: { topAdId: topAdId }, // Send topAdId as a parameter
                            success: function(response) {
                                // Process the response from the server
                                console.log(response); // Print the response to the console
                                // You can populate your modal with the received data here
                            },
                            error: function(xhr, status, error) {
                                console.log('AJAX Request Error:', error);
                            }
                        });
                    });
                });
            </script> --}}


            {{-- <script>
                $(document).ready(function() {
                    $('#modalQuickView').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget);
                        var AdId = button.data('top-ad-id');
                        var topAdId = AdId;
                        var url = button.data('url'); // Retrieve the URL from data-url attribute
                        console.log(topAdId); // Check if this prints the value
                        console.log(url); // Check if this prints the value

                        $.ajax({
                            url: url,
                            type: 'GET',
                            dataType: 'json',
                            // data: { topAdId: topAdId }, // Send topAdId as a parameter
                            success: function(response) {
                                // Process the response from the server
                                console.log(response); // Print the response to the console

                                // Clear the modal content
                                $('#modalContent').empty();

                                // Loop through the JSON response and append the data to modalContent
                                $.each(response, function(index, data) {
                                    var content = '<div class="package">';
                                    content += '<h2>' + data.pkg_name + '</h2>';
                                    content += '<p>' + data.pkg_description + '</p>';
                                    content += '<p>Price: ' + data.price + '</p>';
                                    content += '<p>Event Date: ' + data.event_date + '</p>';
                                    content += '<p>Event Time: ' + data.event_start_time + ' - ' + data.event_end_time + '</p>';
                                    content += '</div>';

                                    $('#modalContent').append(content);
                                });
                            },
                            error: function(xhr, status, error) {
                                console.log('AJAX Request Error:', error);
                            }
                        });
                    });
                });
            </script> --}}


            {{-- <script>
                $(document).ready(function() {
                    $('#modalQuickView').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget);
                        var AdId = button.data('top-ad-id');
                        var topAdId = AdId;
                        var url = button.data('url'); // Retrieve the URL from data-url attribute
                        console.log(topAdId); // Check if this prints the value
                        console.log(url); // Check if this prints the value

                        $.ajax({
                            url: url,
                            type: 'GET',
                            dataType: 'json',
                            // data: { topAdId: topAdId }, // Send topAdId as a parameter
                            success: function(response) {
                                // Process the response from the server
                                console.log(response); // Print the response to the console

                                // Clear the modal content
                                $('#modalContent').empty();
                                $('#modalHeaderContent').empty();

                                // Loop through the JSON response and create accordion cards
                                $.each(response, function(index, data) {
                                    var card = '<div class="card">';
                                    card += '<div class="card-header" role="tab" id="heading' + index + '">';
                                    card += '<a data-toggle="collapse" href="#collapse' + index + '" aria-expanded="false" aria-controls="collapse' + index + '">';
                                    card += '<h5 class="mb-0">';
                                    card += data.pkg_name + ' <i class="fas fa-angle-down rotate-icon"></i>';
                                    card += '</h5></a></div>';
                                    card += '<div id="collapse' + index + '" class="collapse" role="tabpanel" aria-labelledby="heading' + index + '">';
                                    card += '<div class="card-body">';
                                    card += '<p>' + data.pkg_description + '</p>';
                                    card += '<p>Price: ' + data.price + '</p>';
                                    card += '<p>Event Date: ' + data.event_date + '</p>';
                                    card += '<p>Event Time: ' + data.event_start_time + ' - ' + data.event_end_time + '</p>';
                                    card += '</div></div></div>';

                                    var modalheading = '<div class="modalhead">';
                                    modalheading += '<h2>' + data.ad_title + '</h2>';
                                    modalheading += '<p>Price Start From: ' + data.price + '</p>';

                                    $('#modalContent').append(card);
                                    $('#modalHeaderContent').append(modalheading);
                                });

                                // Initialize the accordion after adding content
                                $('.collapse').collapse();
                            },
                            error: function(xhr, status, error) {
                                console.log('AJAX Request Error:', error);
                            }
                        });
                    });
                });
            </script> --}}



            <script>
                function capitalizeWords(str) {
                    return str.replace(/\b\w/g, function(match) {
                        return match.toUpperCase();
                    });
                }

                $(document).ready(function() {
        $('#modalQuickView').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var AdId = button.data('top-ad-id');
            var BookingId = button.data('booking-id');
            var adTitle = button.data('ad-title');
            var eventDate = button.data('booking-eventdate');
            var eventStartTime = button.data('booking-eventstarttime');
            var eventEndTime = button.data('booking-eventendtime');
            var eventPackage = button.data('booking-package');
            var url = button.data('url');

            console.log(eventDate); // Check if this prints the value
            console.log(eventStartTime); // Check if this prints the value
            console.log(eventEndTime); // Check if this prints the value
            console.log(eventPackage); // Check if this prints the value

        // Collapse all accordion items when modal is shown
        $('.collapse').removeClass('show'); // Close all accordions

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var pkgSelect = $('#pkg');
                    pkgSelect.empty();
                    pkgSelect.append($('<option>', {
                        value: '',
                        text: 'Choose your option',
                        disabled: true,
                        selected: true
                    }));

                    if (response.length === 0) {
                        $('#modalHeaderTitle').text('');
                        $('#modalPriceTitle').text('');
                        $('#modalImage').attr('src', '');
                        $('#modalContent').empty();
                    } else {
                        var capitalizedAdTitle = capitalizeWords(response[0].ad_title);
                        $('#modalHeaderTitle').text(capitalizedAdTitle);
                        $('#modalPriceTitle').text(response[0].price);
                        $('#modalImage').attr('src', '/storage/' + response[0].ad_image);
                        $('#modalContent').empty();

                       // Set form action attribute with the retrieved BookingId
                    $('#bookmodalform').attr('action', '{{ route("cusbookings.updatebooking", "") }}/' + BookingId);

                    $('#formday').attr('value', eventDate);
                    $('#formstime').attr('value', eventStartTime);
                    $('#formetime').attr('value', eventEndTime);
                    // $('#formpkg').attr('value', eventPackage);

                        $.each(response, function(index, data) {
                            var card = '<div class="card">';
                            card += '<div class="card-header" role="tab" id="heading' + index + '">';
                            card += '<a data-toggle="collapse" href="#collapse' + index + '" aria-expanded="false" aria-controls="collapse' + index + '">';
                            card += '<h5 class="mb-0">';
                            card += data.pkg_name + ' <i class="fas fa-angle-down rotate-icon"></i>';
                            card += '</h5></a></div>';
                            card += '<div id="collapse' + index + '" class="collapse" role="tabpanel" aria-labelledby="heading' + index + '">';
                            card += '<div class="card-body">';
                            card += '<p>' + data.pkg_description + '</p>';
                            card += '<p>Price: ' + data.price + '</p>';
                            card += '<p>Event Date: ' + data.event_date + '</p>';
                            card += '<p>Event Time: ' + data.event_start_time + ' - ' + data.event_end_time + '</p>';
                            card += '</div></div></div>';

                            $('#modalContent').append(card);

                            pkgSelect.append($('<option>', {
                                value: data.id,
                                text: data.pkg_name
                            }));
                        });

                       // Remove 'show' class from all accordions
                    $('.collapse').removeClass('show');
                    }
                },
                error: function(xhr, status, error) {
                    console.log('AJAX Request Error:', error);
                }
            });
        });
    });
            </script>




            {{-- <script>
                $(document).ready(function() {
                    $('#modalQuickView').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget);
                        var AdId = button.data('top-ad-id');
                        var topAdId = AdId-1;
                        var url = button.data('url'); // Retrieve the URL from data-url attribute
                        console.log(topAdId); // Check if this prints the value
                        console.log(url); // Check if this prints the value

                        $.ajax({
                            url: url,
                            type: 'get',
                            dataType: 'json',
                            success: function(response){

                            var len = 0;
                            $('#productTable tbody').empty(); // Empty <tbody>
                            if(response['data'] != null){
                                len = response['data'].length;
                            }

                            if(len > 0){
                                for(var i=0; i<len; i++){
                                    var id = response['data'][i].id;
                                    var name = response['data'][i].name;
                                    var price = response['data'][i].price;

                                    var tr_str = "<tr>" +
                                    "<td>" + (i+1) + "</td>" +
                                    "<td>" + name + "</td>" +
                                    "<td>" + price + "</td>" +
                                    "</tr>";

                                    $("#productTable tbody").append(tr_str);
                                }
                            }else{
                                var tr_str = "<tr>" +
                                    "<td colspan='4'>No record found.</td>" +
                                "</tr>";

                                $("#productTable tbody").append(tr_str);
                            }

                            }
                    });
                });
            </script> --}}

            {{-- <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var modalButtons = document.querySelectorAll(".btn[data-target='#modalQuickView']");

                    modalButtons.forEach(function(button) {
                        button.addEventListener("click", function() {
                            var topAdId = button.getAttribute("data-top-ad-id");
                            // var topAdId = AdId-1;
                            var url = button.getAttribute("data-url");
                            // let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                            let options={ method: "GET", headers: { 'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value, 'Content-Type': 'application/json' } }


                            // fetch(url)
                            // fetch(url, {
                            //     method: 'GET',
                            //     headers: {
                            //         'Content-Type': 'application/json',
                            //         'Accept': 'application/json',
                            //         'url': '/payment',
                            //         "X-CSRF-Token": document.querySelector('input[name=_token]').value
                            //     },
                            // })

                            fetch(url, options)
                                .then(function(response) {
                                    console.log(response);
                                    if (!response.ok) {
                                        throw new Error("Network response was not ok");
                                    }
                                    return response.json();
                                })
                                .then(function(data) {
                                    // Use the response data to update your modal content
                                    console.log(data);
                                    // You can update the modal content here using the data
                                })
                                .catch(function(error) {
                                    console.error("Fetch error:", error);
                                });
                        });
                    });
                });
            </script> --}}



          <div class="row">
            <div class="col-lg-5">
              <!--Carousel Wrapper-->
                    <img class="d-block w-100" id="modalImage" alt="AD image">
                </div>
                <!--/.Slides-->

              {{-- </div> --}}
              <!--/.Carousel Wrapper-->
            {{-- </div> --}}
            <div class="col-lg-7">
              <h2 class="h2-responsive product-name">
                <strong id="modalHeaderTitle"></strong>
              </h2>
              {{-- <div id="modalHeaderContent"></div> --}}
              {{-- <h5 class="h4-responsive">
                <span class="green-text">
                  <strong>Price Start From : </strong>
                </span>
                <span class="green-text">
                    <strong id="modalPriceTitle"></strong>
                  </span>
                </span>
              </h5> --}}



            <div id="modalContent"></div>



              <!-- Add to Cart -->
              <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="bookmodalform" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                <div class="row" style="padding: 0px 50px 0px 0px">
                  <div class="col-md-6">
                    <label for="pkg" class="mdb-main-label">Select Package</label>
                    {{-- <p id="packages"></p> --}}
                    <select class="md-form mdb-select colorful-select dropdown-primary" name="package" id="pkg">
                      {{-- <option value="" disabled selected>Choose your option</option>
                      <option id="packages" value="1">Package 01</option> --}}
                    </select>


                  </div>
                  <div class="col-md-6">
                    <label class="mdb-main-label" for="formday">Event Date</label>
                    <input type="date" name="event_date" id="formday">
                  </div>

                  <div class="card-body">
                  <div class="row" style="padding: 0px 0px 0px 0px">
                    <div class="col-md-6">
                        <label class="mdb-main-label" for="formstime">Select Event Start Time</label>
                        <input type="time" name="event_start_time" id="formstime">
                    </div>

                    <div class="col-md-6">
                        <label class="mdb-main-label" for="formetime">Select Event End Time</label>
                        <input type="time" name="event_end_time" id="formetime">
                    </div>
                </div>
                </div>

                {{-- <div class="col-12">
                    <label class="mdb-main-label" for="msg">Message</label>
                    <textarea class="form-control" id="msg" rows="4"></textarea>
                </div> --}}

                <div class="text-center">

                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Book Now
                    <i class="fas fa-book"></i>
                  </button>
                </div>
            </form>
              </div>
              <!-- /.Add to Cart -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



</section>



<script type="text/javascript">

       $(document).ready(function () {

           $('body').on('click', '#show-user', function () {
             var userURL = $(this).data('url');
             $.get(userURL, function (data) {
                 $('#modalQuickView').modal('show');
                 $('#pkg_name').text(data.pkg_name);
                 $('#pkg_description').text(data.name);
                //  $('#user-email').text(data.email);
             })
          });

       });

   </script>

<!-------------------------------------End of Modal Section For Change Bookings----------------------------------------------------->


    <!-------------------------------------------Footer Begin---------------------------------------------->


    @include('components.onlyfooter');

      <!-------------------------------------------Footer End---------------------------------------------->
      <script>
        function deleteTopBookingRequest(bookingId) {
            if (confirm('Are you sure you want to delete this booking request?')) {
                document.getElementById('delete-booking-form-' + bookingId).submit();
            }
        }

        function deleteBookingRequest(bookingId) {
            if (confirm('Are you sure you want to delete this booking request?')) {
                document.getElementById('delete-booking-form-' + bookingId).submit();
            }
        }

        function deleteTopBooking(bookingId) {
            if (confirm('Are you sure you want to delete this booking?')) {
                document.getElementById('delete-form-' + bookingId).submit();
            }
        }

        function deleteBooking(bookingId) {
            if (confirm('Are you sure you want to delete this booking?')) {
                document.getElementById('delete-form-' + bookingId).submit();
            }
        }
    </script>


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



      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script type="text/javascript" src="js/aos.js"></script>
      <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
      <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
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

</body>
</html>
