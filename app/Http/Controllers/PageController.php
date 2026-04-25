<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('about');
    }

    public function offer()
    {
        return view('offer');
    }

    public function contact()
    {
        return view('contact');
    }

    public function error404()
    {
        return view('error404');
    }
}
