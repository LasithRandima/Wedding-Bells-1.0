

<x-frontend>

    <?php
    $category_name = DB::table('vendor_categories')
        ->select('Category_name')
        ->where('id', '=', 1)
        ->value('Category_name');

    $wedding_date = DB::table('clients')
        ->select('wed_date')
        ->where('user_id', '=', Auth::id())
        ->value('wed_date');

    $wedding_start_time = DB::table('clients')
        ->select('wed_start_time')
        ->where('user_id', '=', Auth::id())
        ->value('wed_start_time');

    $wedding_end_time = DB::table('clients')
        ->select('wed_end_time')
        ->where('user_id', '=', Auth::id())
        ->value('wed_end_time');

    $phone = DB::table('clients')
        ->select('c_tpno')
        ->where('user_id', '=', Auth::id())
        ->value('c_tpno');

    // Decode the JSON string into a PHP array
    $data = json_decode($phone, true);

    // Check if the array is not empty and has the "c_tpno" key
    if (!empty($data) && isset($data[0]['c_tpno'])) {
        $c_tpno = $data[0]['c_tpno'];
        echo $c_tpno;
    } else {
        echo "No 'c_tpno' found in the JSON array.";
    }

    ?>

    <div class="container" style="margin-top: 130px; margin-bottom:130px; padding: 0 100px;">



        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Somethiong wrong with your input</h4>
            <hr>
            <ul class="">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form action="{{ route('clientVendorBookings.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- <p>topAdVendorId : {{ $topAdsVendorId }} </p>
            <p>normalAdVendorId : {{ $advertisementsVendorId }}</p> --}}

            <input type="hidden" name="c_id" value="{{ Auth::id() }}">
            <input type="hidden" name="ad_id" value="{{ $clientVendorBooking }}">
            <input type="hidden" name="ad_vid" value="{{ $advertisementsVendorId }}">
            <input type="hidden" name="top_ad_vid" value="{{  $topAdsVendorId }}">

            <!-- Text input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Customer name</label>
                <input type="text" id="form6Example3" value="{{ Auth::user()->name }}" name="cName" class="form-control" />
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example5">Email</label>
                <input type="email" id="form6Example5" value="{{ Auth::user()->email }}" name="cEmail" class="form-control" />
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example6">Phone</label>
                <input type="number" min="0" id="form6Example6" name="cPhone" class="form-control" value="{{ $c_tpno  }}" />

              </div>


            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Message</label>
                <textarea class="form-control" name="cMessage" id="form6Example7" rows="4"></textarea>

              </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Event Date</label>
              <input type="date" id="form6Example4" name="cEventDate" class="form-control" value="{{ $wedding_date }}" />

            </div>


            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Event Start Time</label>
                <input type="time" id="form6Example4" name="cEventStartTime" class="form-control" value="{{ $wedding_start_time }}" />

            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Event End Time</label>
                <input type="time" id="form6Example4" name="cEventEndTime" class="form-control" value="{{ $wedding_end_time }}" />

            </div>



            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Book</button>
          </form>

      </div>
    </div>
</x-frontend>



