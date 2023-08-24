<?php
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Livewire\Clientregister;
use App\Http\Livewire\Vendorregister;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\TopAdController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\VendorCategoryController;
use App\Http\Controllers\ClientChecklistController;
use App\Http\Controllers\ClientGuestListController;
use App\Http\Controllers\ClientEventPlannerController;
use App\Http\Controllers\ClientVendorBookingController;
use App\Http\Controllers\ClientBookingController;
use App\Http\Controllers\CancelBookingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustormerBookingController;
use App\Http\Controllers\SitePackageController;
use App\Http\Livewire\UpdateClientRegister;
use App\Http\Livewire\UpdateVendorRegister;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('customer.index');
});


Route::get('/adplan', function () {
    return view('vendor.adplan');
})->name('adplan');

Route::get('/checklist', function () {
    return view('customer.checklist');
})->name('checklist');


Route::get('/budgetplanner', function () {
    return view('customer.budgetplannerfront');
})->name('budgetplanner');

Route::get('/guestlist', function () {
    return view('customer.guestlistfront');
})->name('guestlist');

Route::get('/adsplan', function () {
    return view('vendor.adsplan');
})->name('adsplan');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('contact.send');
// Route::controller(ClientChecklistController::class)->group(function(){
//     Route::get('/checklist', 'index');
//     Route::post("categories","getCategory")->name('get-category');
//     Route::post('ClientChecklist','store');
// });


Route::get('/vendor/register', function () {
    return view('livewire.Vendorregister');
});

Route::get('/vendor/register', Vendorregister::class);

Route::get('/vendor/updateregister', UpdateVendorRegister::class);

Route::get('/customer/updateregister', UpdateClientRegister::class);

Route::get('/vendorbooking', function () {
    return view('common.vendorbooking');
});





Route::get('/customer/register', function () {
    return view('livewire.Clientregister');
});

Route::get('/customer/register', Clientregister::class)->name('customerreg');

Route::resource('client-guest-lists', ClientGuestListController::class);

//Event Calendar Routes
Route::resource('clienteventplanners', ClientEventPlannerController::class);
Route::resource('checklist', ClientChecklistController::class);

Route::resource('topAds', TopAdController::class);
Route::resource('vendorCategories', VendorCategoryController::class);
Route::resource('vendors', VendorController::class);
Route::resource('clients', ClientController::class);
Route::resource('advertistments', AdvertisementController::class);
Route::resource('ads', AdsController::class);
Route::resource('sitePackages', SitePackageController::class);

Route::resource('clientVendorBookings', ClientVendorBookingController::class);
Route::resource('clientBookings', ClientBookingController::class);
Route::get('clientBookings/{clientbooking}', [ClientBookingController::class, 'packageData'])->name('clientBookings.packges');

// Route::put('clientVendorBookings/{clientVendorBooking}/cancel', ClientVendorBookingController::class)->name('clientVendorBookings.cancel');
Route::put('bookings/{booking}/reqcancel', [CancelBookingController::class, 'cancelRequest'])->name('bookings.requestcancel');
Route::put('bookings/{booking}/cancel', [CancelBookingController::class, 'cancelBooking'])->name('bookings.bookingcancel');
Route::put('bookings/{booking}/book', BookingController::class)->name('bookings.book');

Route::get('cusbookings/{cusbooking}', [CustormerBookingController::class, 'packageData'])->name('cusbookings.packages');
Route::patch('cusbookings/{cusbooking}', [CustormerBookingController::class, 'updatebooking'])->name('cusbookings.updatebooking');

Route::get('/cusbookings', function () {
    return view('vendor.vendorPackages');
});


Route::get('/customer/calendar/index', [CalendarController::class, 'index'])->name('customer.calendar.index');
Route::post('/customer/calendar', [CalendarController::class, 'store'])->name('customer.calendar.store');
Route::patch('/customer/calendar/update/{id}', [CalendarController::class, 'update'])->name('customer.calendar.update');
Route::delete('/customer/calendar/destroy/{id}', [CalendarController::class, 'destroy'])->name('customer.calendar.destroy');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    Route::get('/dashboard', function () {
        $webuser = AUTH::id();
        $client = DB::scalar("select v_name from vendors where user_id = '$webuser'");
        $redirectUrl = Session::get('redirectUrl');
        if ($redirectUrl) {
            return redirect($redirectUrl);
            Session::forget('redirectUrl');
        }else {
        if(Auth::user()->role_id == '1'){
            return redirect('/admin');
        }else if(Auth::user()->role_id == '2'){
            return redirect('/admin');
        }else if(Auth::user()->role_id == '3' && $client !== null){
            return redirect('/');
        }else if(Auth::user()->role_id == '3' && $client == null){
            return redirect('/customer/register');
        }
    }
    })->name('dashboard');
// });

    // Route::get('/dashboard', function ($request) {
    //     if ($request->filled('redirect')) {
    //         return redirect($request->input('redirect'));
    //     }else{
    //         if(Auth::user()->role_id == '1'){
    //             return redirect('/admin');
    //         }else if(Auth::user()->role_id == '2'){
    //             return redirect('/admin');
    //         }else if(Auth::user()->role_id == '3'){
    //             return view('customer.index');
    //         }
    //     }

    // })->name('dashboard');

});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/login', function (Request $request) {
//         $redirect = $request->input('redirect');

//         if ($redirect && !Str::contains($redirect, 'email/verify')) {
//             return redirect($redirect);
//         } else {
//            return redirect()->intended(config('fortify.home'));
//         }
//     })->name('login');
// });
