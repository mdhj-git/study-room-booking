<?php

namespace App\Http\Controllers;



class BookingController extends Controller
{
    public function index()
    {
        $user=auth()->user();
        $bookings=$user->bookings;
        return view('bookings.index',['bookings'=>$bookings]);
    }
}
