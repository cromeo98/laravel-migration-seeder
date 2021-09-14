<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TripAgency;

class DynamicController extends Controller
{
    public function homepage() {

        $trips = TripAgency::all();

        return view('home', compact('trips'));
    }
}
