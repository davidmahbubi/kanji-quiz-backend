<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

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
            $credentials = $request->only(['username', 'password']);
            $user = User::where('username', $credentials['username'])->first();
            if ($user && Hash::check($credentials['password'], $user->password)) {
                return response()->json([
                    'success' => TRUE,
                    'message' => 'Authenticated',
                    'data' => [
                        'users' => $user,
                    ]
                ]);
            } else {
                return response()->json([
                    'success' => FALSE,
                    'message' => 'Wrong credentials',
                ], 401);
            }
        }
    }

    /**
     * checkLoggedUser method
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\JsonResponse|void
     */
    public function checkLoggedUser(Request $request)
    {
        if ($request->expectsJson()) {
            return response()->json([
                'success' => TRUE,
                'message' => 'User authenticated',
                'data' => [
                    'user' => Auth::guard('user')->user(),
                ]
            ]);
        }
        return abort(404);
    }
}
