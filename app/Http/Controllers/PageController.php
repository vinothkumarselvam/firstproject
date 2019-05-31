<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('Pages.home', ['user' => 'vinoth']);
    }

    public function aboutus()
    {
        return view('Pages.aboutus');
    }
    public function contact()
    {
        return view('Pages.contact');
    }
}
