
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>



    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css"> --}}


    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


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

@powerGridStyles



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

<!-- -------------------------------------------------- end of slider-------------------------------------------------------------------------- -->
<livewire:guest-list />


<livewire:guest-table/>

<div style="overflow-x: scroll;" class="px-5 pt-5">
<livewire:client_guest_lists tableName="Guest List"/>
</div>








    <!-------------------------------------------Footer Begin---------------------------------------------->


    @include('components.onlyfooter')

      <!-------------------------------------------Footer End---------------------------------------------->
      @livewireScripts
      @powerGridScripts

      <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script type="text/javascript" src="js/toastr.min.js"></script>
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

      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}


    {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script> --}}
    <script src="js/sweetalert.min.js"></script>


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


        <script>
            window.addEventListener('swal:confirm', event => {
                swal({
                    title: event.detail.title,
                    text: event.detail.text,
                    // id: event.detail.ids.toString(),
                    id: event.detail.id,
                    icon: event.detail.type,
                    buttons: true,
                    dangerMode: true,
                })

                .then((willDelete) => {
                    if (willDelete) {
                        window.livewire.emit('bulkDelete', []);
                        window.livewire.emit('destroy', event.detail.id);
                    }
                })
            })


            window.addEventListener('swal:confirmDelete', event => {
                swal({
                    title: event.detail.title,
                    text: event.detail.text,
                    // id: event.detail.id,
                    icon: event.detail.type,
                    buttons: true,
                    dangerMode: true,
                })

                .then((willDelete) => {
                    if (willDelete) {
                        window.livewire.emit('guestDelete', event.detail.id);
                    }
                })
            })
        </script>

</body>
</html>
