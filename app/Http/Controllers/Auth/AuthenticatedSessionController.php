<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        
        if (auth()->user()->is_admin)
            return redirect()->route('admin_dashboard', app()->getLocale()) ->with('success', 'Sie sind eingeloggt'); 
        else
            return redirect()->route('user_dashboard', app()->getLocale()) ->with('success', 'Sie sind eingeloggt'); 

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/');
    }
}
