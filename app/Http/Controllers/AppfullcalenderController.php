<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppfullcalenderController extends Controller
{
    public function index()
    {
        return view('admin.app-full-calender');
    }
}