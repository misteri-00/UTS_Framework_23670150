<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormelementsController extends Controller
{
    public function index()
    {
        return view('admin.form-elements');
    }
}