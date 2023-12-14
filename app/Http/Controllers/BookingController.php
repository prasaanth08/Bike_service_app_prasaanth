<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmMailNotify;
use App\Mail\MailNotify;
use App\Mail\UpdateMailNotify;
use App\Models\Booking;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
  public function bookingview() //to view booking register
  {
    $datas = Service::get('topic');
    return view('user.bookingregister', compact('datas'));
  }


  public function bookingpost(Request $request) //to store service booking data to database
  {
    $request->validate([
      'model' => 'required',
      'b_number' => 'required',
      'date' => 'required|after:yesterday',
      'service' => 'required'
    ]);
    $booking = new Booking;
    $booking->name = Auth::user()->name;
    $booking->email = Auth::user()->email;
    $booking->p_number = Auth::user()->phone;
    $booking->b_model = $request['model'];
    $booking->b_number = $request['b_number'];
    $booking->date = $request['date'];
    $booking->service_need = $request['service'];
    $booking->status = 'pending';

    $booking->save();

    $adminEmail = 'demod5359@gmail.com';


     $UserEmail=$booking->email=Auth::user()->email;
     Mail::to( $UserEmail)->send(new  ConfirmMailNotify($booking)); // send  mail to user( booking successfull)

    Mail::to($adminEmail)->send(new MailNotify($booking)); // send  mail to admin( new booking customer details)

    return redirect()->back()->withMessage('successfully booked');
  }


  public function customertable()
  { //to view all booked customer details, with pagenation

    $customers = Booking::paginate(5);

    return view('admin.customer_table', compact('customers'));
  }

  public function statusupdate($id)
  { //to view edit cutomer status page with id
    $customers = Booking::find($id);

    return view('layouts.customer_details', compact('customers'));
  }
  public function updatestatus($id, Request $request)
  { // to update customer booking status


    $customers = Booking::find($id);
    $customers->status = $request['status'];
    $userEmail = $customers->email;

    Mail::to($userEmail)->send(new UpdateMailNotify($customers)); // mail to customer while admin update status
    $customers->save();

    return redirect()->route('admin.edit.status', $customers->id)->withMessage('successfully updated');
  }
}
