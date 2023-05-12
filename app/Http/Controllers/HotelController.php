<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        return view('hotel.index');
    }

    public function show($id)
    {
        return view('hotel.show', [
            'hotel' => $id
        ]);
    }

    public function reservation($id)
    {
        return view('hotel.reservation', [
            'reserve' => $id
        ]);
    }
}
