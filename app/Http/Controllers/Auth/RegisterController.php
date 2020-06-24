<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    /**
     * postRegister method
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function postRegister(Request $request)
    {

        if ($request->expectsJson()) {
            $request->validate([
                'name' => 'required|string',
                'username' => 'required|string',
                'password' => 'required|min:3',
                'password_confirmation' => 'required|same:password'
            ]);
            
            try {
                User::create([
                    'name' => $request->name,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'picture' => 'default.png',
                    'api_token' => Str::random(64),
                    'created_at' => Carbon::now(),
                ]);
                return response()->json([
                    'success' => TRUE,
                    'message' => 'Register user successfully',
                ]);
            } catch (Exception $e) {
                return response()->json([
                    'success' => FALSE,
                    'message' => $e->getMessage(),
                ], 503);
            }
        }

        return abort(404);
    }
}
