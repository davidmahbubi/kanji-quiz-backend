<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * index method
     * 
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * postLogin method
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request)
    {
        if (!$request->expectsJson()) {
            if (Auth::guard('admin')->attempt($request->only(['username', 'password']))) {
                return redirect('/');
            } else {
                return redirect()->route('login')->with('error', 'Wrong credentials');
            }
        } else {
            // Check manual
        }
    }
}
