<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;



class BookingController extends Controller
{

    public function store(Request $request)
    {
        $booking = new Booking();
        $booking->name=$request->name;
        $booking->email=$request->email;
        $booking->type=$request->type;
        $booking->date=$request->date;
        $booking->save();
        return redirect('dashboard');
    }

    public function list()
    {

        $bookings=Booking::where('name','LIKE','%{Auth::user()->name}%')->get();
        return view('torles',compact('bookings'));
    }
    public function delete(Request $request)
    {
        $name = Name::find($request->input('id'));
        $name->delete();
    }
}
