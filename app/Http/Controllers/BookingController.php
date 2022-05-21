<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;


class BookingController extends Controller
{

    public function store(Request $request)
    {
        $booking = new Booking();
        $booking->name=$request->name;
        $booking->email=$request->email;
        $booking->type=$request->type;
        $booking->date=$request->date;
        if ($request->date > today()){
            $booking->save();
            return redirect('dashboard')->with('message','Sikeres foglalás');
        }
        else{
            return redirect('dashboard')->with('message','Nem lehet régebbi dátumra foglalni');
        }

    }

    public function list()
    {
        $bookings= DB::table('bookings')->where('name','LIKE',Auth::user()->name)->get();
        return view('torles',compact('bookings'));
    }
    public function destroy($id)
    {
        $booking = Booking::find($id)->delete();
        return redirect('/torles')->with('message','Sikeres törlés');
    }
}
