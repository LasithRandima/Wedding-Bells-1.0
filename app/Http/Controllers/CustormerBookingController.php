<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientVendorBooking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DebugBar\DebugBar;

class CustormerBookingController extends Controller
{
    public function packageData($id)
    {
        $ad_id = $id;
        // dd($id);
        // $topAdId = ClientVendorBooking::findOrFail($id-1);

        // $topAdId = $request->get('adId');


        $packages = DB::table('advertisements')
                    ->join('client_vendor_bookings', 'advertisements.id', '=', 'client_vendor_bookings.ad_id')
                    ->join('adpackages', 'advertisements.id', '=', 'adpackages.ad_id')
                    ->select('adpackages.*', 'client_vendor_bookings.event_date', 'client_vendor_bookings.event_start_time', 'client_vendor_bookings.event_end_time','advertisements.ad_image')
                    ->where('advertisements.id', '=', $ad_id)
                    ->get();

                    // dd($packages);

                    // app('debugbar')->info( $packages);
        // Return a view with the fetched data
        // return view('customer.managebookings', compact('packages'));
        //  return view('vendor.vendorPackages', compact('packages'));

        return response()->json($packages);

        //  // Fetch all records
        //  $userData['data'] = $packages;

        //  echo json_encode($userData);
        //  exit;
    }


    public function updatebooking(Request  $request, $id)
    {
        // dd($request);
            // Post::where('id', $id)->update([
        //     'title' => $request->title,
        //     'except' => $request->except,
        //     'body' => $request->body,
        //     'image_path' => $request->image,
        //     'is_published' => $request->is_published === 'on',
        //     'min_to_read' => $request->min_to_read
        // ]);


        // $request->validate([
        //     'title' => 'required|max:255|unique:posts,title,'.$id,
        //     'except' => 'required',
        //     'body' => 'required',
        //     'image' => ['mimes:jpg,png,jpeg', 'max:5048'],
        //     'min_to_read' => 'required|min:0|max:60'
        // ]);


        $request->validate([
            'package' => 'required|numeric',
            'event_date' => 'required|after_or_equal:today',
            'event_start_time' => 'required',
        ]);


        ClientVendorBooking::where('id', $id)->update([
            'pkg_id' => $request->package,
            'event_date' => $request->event_date,
            'event_start_time' => $request->event_start_time,
            'event_end_time' => $request->event_end_time,
            'booking_status' => 'booked',
        ]);

        return redirect()->route('clientBookings.index')->with('success', 'Booked successfully.');
    }
}
