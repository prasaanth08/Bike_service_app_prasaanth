<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserBookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('');
// });

Route::get('/', [LoginController::class, 'login']); //login
Route::post('/loginpost', [LoginController::class, 'loginpost']);

Route::get('/register', [LoginController::class, 'register']); //account create
Route::post('/registerpost', [LoginController::class, 'registerpost']);


Route::get('/logout', [LoginController::class, 'logout']); //logout



Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin/index', [HomeController::class, 'adminindex'])->name('admin.index'); //admin

    Route::get('/admin/create/services', [ServiceController::class,'add_services'])->name('service.create'); //admin
    Route::post('/create/service', [ServiceController::class, 'store'])->name('service.store');//add service

    Route::get('/edit/{id}/service', [ServiceController::class, 'edit_service'])->name('edit.service');//edit service
    
    Route::put('/admin/{id}/update/service', [ServiceController::class, 'updatestatus'])->name('admin.update.service'); //update service
   
    Route::delete('/destroy/{id}', [ServiceController::class, 'destroy']); //delete service

    Route::get('/admin/customer/table', [BookingController::class, 'customertable'])->name('admin.customer'); // customers booking details form
    Route::get('/admin/view/{id}', [BookingController::class, 'statusupdate'])->name('admin.edit.status'); //edit booking status
    Route::put('/admin/{id}/update/status', [BookingController::class, 'updatestatus'])->name('admin.update.status'); //update booking status
    
});


Route::group(['middleware' => 'user'], function () {

    Route::get('/user/index', [HomeController::class, 'userindex'])->name('user.index'); //user

    
    Route::get('/booking/form', [BookingController::class, 'bookingview'])->name('booking');//service booking form
    Route::post('/bookingpost', [BookingController::class, 'bookingpost']); //confirm booking service
    Route::get('/user/booked/service', [UserBookingController::class, 'bookedstatus'])->name('booking.status'); // booked services table
    Route::get('/user/view/{id}', [BookingController::class, 'statusupdate'])->name('user.edit.status'); //to view particular booked service
});
