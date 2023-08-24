

<x-frontend>

    <?php
    $category_name = DB::table('vendor_categories')
        ->select('Category_name')
        ->where('id', '=', 1)
        ->value('Category_name');

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
                <input type="number" min="0" id="form6Example6" name="cPhone" class="form-control" />

              </div>


            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Message</label>
                <textarea class="form-control" name="cMessage" id="form6Example7" rows="4"></textarea>

              </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Event Date</label>
              <input type="date" id="form6Example4" name="cEventDate" class="form-control" />

            </div>


            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Event Start Time</label>
                <input type="time" id="form6Example4" name="cEventStartTime" class="form-control" />

            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Event End Time</label>
                <input type="time" id="form6Example4" name="cEventEndTime" class="form-control" />

            </div>



            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Book</button>
          </form>

      </div>
    </div>
</x-frontend>



