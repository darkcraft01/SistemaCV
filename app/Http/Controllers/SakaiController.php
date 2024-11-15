<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SakaiController extends Controller
{
    public function index()
    {
        return view('sakai');
    }
}
