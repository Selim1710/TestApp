<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function bootstrap_template()
    {
        return view('bootstrap_template');
    }

    public function create()
    {
        return view('create');
    }
}
