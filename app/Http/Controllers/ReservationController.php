<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Apartment;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $apartments = Apartment::paginate(15);
        return view('pages.reservations', compact('apartments'));
    }
    public function addReservation(){
        return view('pages.add-reservation');
    }
    public function storeReservation(Request $request){

        $validated = $request->validate([
            'first_name'=> 'required|min:3|max:60',
            'last_name'=> 'required|min:3|max:60',
            'email'=> 'required|min:3|max:255',
            'phone'=> 'required|regex:^\+\d{3,3} *\d{3,3} *\d{5,5}$^|min:6|max:20',
            'message'=> 'max:5000',
            'reserved_at' => 'required'


        ]);
        Reservation::create([
            'first_name'=> request('first_name'),
            'last_name'=> request('last_name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'message' => request('message'),
            'reserved_at' => request('reserved_at'),
            'date_sell_from' => request('date_sell_from'),
            'date_sell_to' => request('date_sell_to')
        ]);
        return back()->with('success', "Reservation complete");
    }
}
