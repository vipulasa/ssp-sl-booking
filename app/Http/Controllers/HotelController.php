<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        return view('hotel.index');
    }

    public function show(Hotel $hotel)
    {
        return view('hotel.show', [
            'hotel' => $hotel
        ]);
    }

    public function reservation(Hotel $hotel)
    {
        return view('hotel.reservation', [
            'hotel' => $hotel
        ]);
    }
}
