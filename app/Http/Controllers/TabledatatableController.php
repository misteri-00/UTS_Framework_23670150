<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabledatatableController extends Controller
{
    public function index()
    {
        return view('admin.table-datatable');
    }
}