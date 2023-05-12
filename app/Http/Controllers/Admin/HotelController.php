<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        // get all hotels in the database
        $hotels = Hotel::all();

        return view('admin.hotel.index', [
            'hotels' => $hotels
        ]);
    }

    public function create()
    {
        return view('admin.hotel.form', [
            'hotel' => new Hotel()
        ]);
    }

    public function edit(Hotel $hotel)
    {
        return view('admin.hotel.form', [
            'hotel' => $hotel
        ]);
    }
}
