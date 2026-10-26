<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthbasicLoginController extends Controller
{
    public function index()
    {
        return view('admin.auth-basic-login');
    }
}