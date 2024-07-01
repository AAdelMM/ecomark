<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function indexEn()
    {
        return view('en.home');
    }

    public function indexAr()
    {
        return view('ar.home');
    }

    public function aboutEn()
    {
        return view('en.about');
    }

    public function aboutAr()
    {
        return view('ar.about');
    }
}