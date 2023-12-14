<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
class UserBookingController extends Controller
{
    public function bookedstatus(){
      try{
      if(Auth::check()){
        
        $customers=Booking::where('email', auth()->user()->email)->paginate(5);

     

        return view('user.servicepending',compact('customers'));
        
    }
  } catch (Exception $e) {
    return redirect()->back()->withMessage('failed updated');
}
      }
}
