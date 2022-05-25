<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;


class BookingController extends Controller
{
    //foglalások mentése adatbázisba, ha a foglalni kívánt dátum nem régebbi dátum
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
    //az adott userhez tartozó foglalások kilistázása
    public function list()
    {
        $bookings= DB::table('bookings')->where('name','LIKE',Auth::user()->name)->get();
        return view('torles',compact('bookings'));
    }

    //id alapján foglalás törlése
    public function destroy($id)
    {
        $booking = Booking::find($id)->delete();
        return redirect('/torles')->with('message','Sikeres törlés');
    }
}
