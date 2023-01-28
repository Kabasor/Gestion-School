<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
<<<<<<< HEAD
    public function create(): View
    {
        return view('auth.login');
    }
=======

     public function index(): View
     {
         return view('auth.login');
     }

    // public function create(): View
    // {
    //     return view('auth.login');
    // }
>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
<<<<<<< HEAD
        $request->authenticate();
=======

        $request->authenticate();
        // dd($request->all());
>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
