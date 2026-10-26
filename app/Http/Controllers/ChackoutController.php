<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChackoutController extends Controller
{
    public function index()
    {
        return view('landing.chackout');
    }
}