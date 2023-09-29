<?php

namespace Modules\Usr\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Modules\Usr\Http\Requests\LoginRequest;
use Illuminate\Contracts\Support\Renderable;

class UsrController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('usr::content.index');
    }

    /**
     * Authenticate the user credentials.
     * 
     * @param \Modules\Usr\Http\Requests\LoginRequest $request
     * @return RedirectResponse
     */
    public function authenticate(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();
 
            return redirect()->route('panel.index');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Destroy the authenticated user sessions.
     * 
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('usr.index');
    }
}
