<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $hotels = \App\Models\Hotel::all();

        return view('home', [
            'hotels' => $hotels,
        ]);
    }
}
