<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentmodalsController extends Controller
{
    public function index()
    {
        return view('admin.component-modals');
    }
}