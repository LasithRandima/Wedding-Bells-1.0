
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Calendar</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    {{-- <link href="{{ asset('fullcalendar/main.css') }}" rel='stylesheet' />
    <script src="{{ asset('fullcalendar/main.js') }}"></script> --}}

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>


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
              <img class="img-fluid" src="{{ asset('images/slider/Contact/1.png') }}" >
              <div class="carousel-caption">
                <h1>Welcome To Wedding Bells</h1>
                <p>The Sri Lankan Premium Wedding Resource Directory.</p>

                <button type="button"  id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider1">
                  Read more
                </button>
              </div>
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="{{ asset('images/slider/Contact/2.png') }}">
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
              <img class="img-fluid" src="{{ asset('images/slider/Contact/3.png') }}">
              <div class="carousel-caption">
                <h1>Are you A Vendor?</h1>
                <p>We are here to help your grow your business. Come join with us to advertise</p>

                <button type="button"  id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider3">
                  Read more
                </button>
              </div>
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="{{ asset('images/slider/Contact/4.png') }}">
              <div class="carousel-caption">
                <h1>Contact Us </h1>
                <P>Build your team with the best wedding professionals</p>

                <button type="button" id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider4">
                  Read more
                </button>
              </div>
            </div>


            <div class="carousel-item">
              <img class="img-fluid" src="{{ asset('images/slider/Contact/5.png') }}">
              <div class="carousel-caption">
                <h1>Who We Are</h1>
                <p >Begin Planning Your Dream Wedding Day at Wedding Bells & Make Your Big Day Shine.</p>

                <button type="button" id="vidBtn" class="more-bttn" data-toggle="modal" data-target="#slider5">
                  Read more
                </button>
              </div>
            </div>


            <div class="carousel-item">
              <img class="img-fluid" src="{{ asset('images/slider/Contact/6.jpg') }}">
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



<div class="hero">



    <form action="{{ route('clienteventplanners.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger my-5">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif


        <input type="hidden" id="clientids" name="clientids" value="{{ Auth::id() }}">
        <div class="input-group iconwrapper">
          <input type="text" id="event" name="event" class="events">
          <label for="event"><i class="fa fa-calendar" right-6 aria-hidden="true"></i> Event Title</label>
        </div>

        <div class="input-group">

          <textarea name="eventdesc" id="eventdesc" rows="3" class="events" placeholder="Description"></textarea>

        </div>
        <div class="input-group">
            <input type="date" id="esdate" name="esdate">
            <label for="esdate">Event Date</label>
        </div>

        <div class="input-group">
            <input type="date" name="end_date" id="end_date">
            <label for="end_date">Event End Date</label>
        </div>

        <div class="input-group">
            <input type="time" id="etime" name="etime">
            <label for="etime">Event Time</label>
        </div>

        <div class="input-group iconwrapper">
          <input type="text" id="rperson" class="events" name="rperson">
          <label for="rperson">Responsible Person</label>
        </div>

        <button type="submit" class="event-btn">Add Events <i class="fa fa-plus" aria-hidden="true"></i></button>

    </form>

</div>



  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eventsModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="eventsModal" tabindex="-1" role="dialog" aria-labelledby="eventsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Event Calendar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="modalhero">

                <form action="">
                    <div class="input-group iconwrapper">

                      <input type="text" id="title" class="events" required>
                      <span id="etitleError" class="text-danger"></span>
                      <label for="title"><i class="fa fa-calendar" right-6 aria-hidden="true"></i> Event Title </label>

                    </div>
                    <input type="hidden" id="clientid" value="{{ Auth::id() }}">
                    <div class="input-group">
                      <textarea name="" id="eventdes" rows="3" class="events" placeholder="Description"></textarea>
                    </div>

                    <div class="input-group">
                        <input type="date" id="edate"  required>
                        <label for="edate">Event Start Date</label>
                    </div>

                    <div class="input-group">
                        <input type="date" id="enddate">
                        <label for="enddate">Event End Date</label>
                    </div>

                    <div class="input-group">
                        <input type="time" id="eventtime">
                        <label for="time">Event Time</label>
                    </div>

                    <div class="input-group iconwrapper">
                      <input type="text" id="person" class="events">
                      <label for="person">Responsible Person</label>
                    </div>

                    {{-- <button type="submit" class="event-btn">Add Events <i class="fa fa-plus" aria-hidden="true"></i></button> --}}

                </form>
            </div>

            </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<div class="containner">
    <div class="row">
        <div class="col-12 d-flex justify-center">
            {{-- <h3 class="text-center mt-5">Event Calendar</h3> --}}
            <div class="col-md-10 offset-1 mt-5 mb-5">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>




{{-- <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script> --}}
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

<script>

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var cevents = @json($events);

        $('#calendar').fullCalendar({
          header: {
            left: 'prev, next today',
            center: 'title',
            right: 'month, agendaWeek, agendaDay'
          },
          events: cevents,
          selectable: true,
          selectHelper: true,
          select: function (start, end, allDays){
            $('#eventsModal').modal('toggle');

            $('#saveBtn').click(function() {
                var cid = $('#clientid').val();
                var title = $('#title').val();
                var edes = $('#eventdes').val();
                var start_date = moment(start).format('YYYY-MM-DD');
                var end_date = moment(end).format('YYYY-MM-DD');
                var etime = $('#eventtime').val();
                var eperson = $('#person').val();

                $.ajax({
                    url:"{{ route('customer.calendar.store') }}",
                    type:"POST",
                    dataType:'json',
                    data: { cid, title, edes, start_date, end_date, etime, eperson },
                    success:function(response)
                    {
                        // calendar.fullCalendar('refetchEvents');

                        $('#eventsModal').modal('hide');
                        // setTimeout(() => {
                        // document.location.reload();
                        // }, 400);
                        $('#calendar').fullCalendar('renderEvent', {
                            'title': response.event_title,
                            'event_desc' : response.event_desc,
                            'start' : response.event_start_date,
                            'end' : response.event_end_date,
                            'event_start_time' : response.event_start_time,
                            'responsible_person' : response.responsible_person
                        });
                    },
                    // success: function(response) {
                    //     calendar.fullCalendar('refetchEvents');
                    //     alert('Event Updated Successfully');
                    // },
                    error:function(error)
                    {
                        if(error.responseJSON.errors) {
                            $('#etitleError').html(error.responseJSON.errors.title);
                        }
                    },
        });
    });
    },
    editable: true,
    eventDrop: function(event){
        var id = event.id;
        var start_date = moment(event.start).format('YYYY-MM-DD');
        var end_date = moment(event.end).format('YYYY-MM-DD');

        $.ajax({
                    url:"{{ route('customer.calendar.update', '') }}"+'/'+ id,
                    type:"PATCH",
                    dataType:'json',
                    data: { start_date, end_date },
                    success:function(response)
                    {
                        swal("Great!", "Event Updated Successfully!", "success");

                    },
                    error:function(error)
                    {
                       console.log(error)
                    },
        });
    },
    eventClick:function(event){
        var id = event.id;

        if(confirm('Are you sure you want to remove this event?')){
            $.ajax({
                    url:"{{ route('customer.calendar.destroy', '') }}"+'/'+ id,
                    type:"DELETE",
                    dataType:'json',
                    success:function(response)
                    {
                        // var id = response
                        $("#calendar").fullCalendar('removeEvents', response)
                        swal("Great!", "Event Deleted Successfully!", "success");

                        // setTimeout(() => {
                        // document.location.reload();
                        // }, 400);
                    },
                    error:function(error)
                    {
                       console.log(error)
                    },
        });
        }


    }
});

    $("#eventsModal").on("hidden.bs.modal", function(){
        $('#saveBtn').unbind();
    });

});



</script>

{{-- <script type="text/javascript" src="{{ asset('js/calendar.js') }}"></script> --}}


<script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>

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
          </script> --}}

    <script src="{{ asset('js/main.js') }}"></script>
      {{-- <script src="js/smooth-scroll.js"></script> --}}
      {{-- <script>
          var scroll = new SmoothScroll('a[href*="#"]');
      </script> --}}
</body>
</html>
