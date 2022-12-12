<?php

namespace App\Http\Controllers;


class UserDashController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        return view('user.dashboard');
    }

    public function antrag()
    {
        return view('user.antrag'); 
    }

    public function gesuch()
    {

        return view('user.gesuch');
    }

    public function nachrichten($appl_id)
    {
        
        return view('user.nachrichten');
    }

    public function benutzer()
    {
        
        return view('user.benutzer');
    }

    public function dateien()
    {
        
        return view('user.dateien');
    }

    public function einstellungen()
    {
        
        return view('user.einstellungen');
    }
}
