<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class DynamicController extends Controller
{
    public function homepage() {

        $trips = Trip::all();

        return view('home', compact('trips'));
    }
}
