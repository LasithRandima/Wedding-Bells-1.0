<?php

use App\Http\Livewire\Clientregister;
use App\Http\Livewire\Vendorregister;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ClientEventPlannerController;

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
    return view('welcome');
});

Route::get('/vendor/register', function () {
    return view('livewire.Vendorregister');
});

Route::get('/vendor/register', Vendorregister::class);



Route::get('/customer/register', function () {
    return view('livewire.Clientregister');
});

Route::get('/customer/register', Clientregister::class);

//Event Calendar Routes
Route::resource('clienteventplanners', ClientEventPlannerController::class);
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
        return view('dashboard');
    })->name('dashboard');
});
