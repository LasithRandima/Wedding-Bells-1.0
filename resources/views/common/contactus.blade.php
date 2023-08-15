
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="images/favicon/favicon 01 (Copy).png" type="image/x-icon">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aos.css">
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

    <section class="contacts" id="contactus">
        <div class="contents">
            <h2 data-aos="zoom-in">Contact Us</h2>
            <P data-aos="zoom-in" data-aos-duration="2000">We would love to hear from you. For all the general inquiries, please get in touch with us via the contact form below.  Let us know if there is anything you would like to see more of, any suggestions and also the oppositions.

              With your help, we can make the Weddings Bells  the most valuable resource for getting married soon life partners in this beautiful paradise.</P>
        </div>
        <div class="container-contact">
            <div class="contactInfo">
              <div class="row">
                <div class="box">
                    <div class="icon-c"><i class="fas fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <P>456,<br>Panhida Road,<br>Kaduwela,Sri Lanka</P>
                    </div>
                </div>
                <div class="box">
                    <div class="icon-c"><i class="fas fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <P>0711234567</P>
                    </div>
                </div>
                <div class="box">
                    <div class="icon-c"><i class="fas fa-envelope-open" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3></i>Email</h3>
                        <P>reachout.weddingbells@gmail.com</P>
                    </div>
                </div>
              </div>
            </div>
            <div class="contactForm" data-aos="fade-up-left">
                <form id="contact-form" name="contact-form" method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                    @csrf
                    <h3 data-aos="zoom-in">Please fill out the form below and we will get back to you as soon as possible.</h3>
                    <div class="inputBox">
                    <input type="text" name="name" id="fname" placeholder="" required=required>
                    <span>Name</span>
                    </div>
                    {{-- <div class="inputBox">
                    <input type="text" name="lname" id="lname" placeholder="" required=required>
                    <span>Last Name</span>
                    </div> --}}
                    <div class="inputBox">
                    <input type="number" name="phone" id="phone" placeholder="" required=required>
                    <span>Phone</span>
                    </div>
                    <div class="inputBox">
                    <input type="Email" name="email" id="email" placeholder="" required=required>
                    <span>Email</span>
                    </div>
                    <div class="inputBox">
                    <textarea name="message" id="message"  required=required></textarea>
                    <span>Type your Message</span>
                    </div>
                    <div class="inputBox">
                      <button type="submit" class="btn-grad btn-md">Send</button>
                    <div class="status" style="text-align: center;color: red;"></div>
                    <div class="status" style="text-align: center;color: green;">
                        @if(Session::has('message_sent'))
                        {{Session::get('message_sent')}}
                        @endif
                    </div>
                    </div>
                </form>


                <div class="social">
                    <a href="https://facebook.com/weddingbells" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="https://twitter.com/weddingbells" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://googleplus.com/weddingbells" target="_blank"><i class="fab fa-google-plus-g fa-2x"></i></a>
                    <a href="https://www.instagram.com/in/weddingbells" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!-------------------------------------------Footer Begin---------------------------------------------->
    <div class="map" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4745.027985058492!2d79.94732771592962!3d6.846012384230547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25044e7acf683%3A0x6513c1923579a890!2sStudio%20X!5e0!3m2!1sen!2slk!4v1603480566808!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <footer>

        @include('components.onlyfooter');

      <!-------------------------------------------Footer End---------------------------------------------->

      <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
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
      <script src="js/contact.js"></script>

</body>
</html>
