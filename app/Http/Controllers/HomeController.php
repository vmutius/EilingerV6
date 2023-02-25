<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function impressum()
    {
        return view('home.impressum');
    }

    public function disclaimer()
    {
        return view('home.disclaimer');
    }

    public function datenschutz()
    {
        return view('home.datenschutz');
    }
}
