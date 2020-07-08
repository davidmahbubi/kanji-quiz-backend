<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Exception;

class UserController extends Controller
{
    /**
     * This method will do single update for user data
     */
    public function singleUpdate(Request $request, $field)
    {
        try {

            $user = Auth::user();

            if ($request->has('password')) {
                $request->merge(['password' => Hash::make($request->password)]);
            }

            $user->$field = $request->$field;
            $user->save();

            return response()->json([
                'success' => TRUE,
                'message' => 'Selected field updated !',
                'data' => [
                    'user' => $user,
                ]
            ]);

        } catch (Exception $e) {

            return response()->json([
                'success' => FALSE,
                'error' => $e->getMessage(),
            ], 500);

        }
    }

    public function pictureUpdate(Request $request)
    {

        define('PICTURE_KEY', 'profile_picture');

        if ($request->hasFile(PICTURE_KEY)) {

            $user = Auth::user();

            $request->validate([
                'profile_picture' => 'max:2048|mimes:png,jpg,jpeg,gif'
            ]);

            $oldPictureName = $user->picture;
            $newPictureName = Str::random(8) . '.' . $request->{ PICTURE_KEY }->extension();

            $request->{ PICTURE_KEY }->move('img/profiles/', $newPictureName);

            if ($oldPictureName !== 'default.svg') {
                unlink('img/profiles/' . $oldPictureName);
            }

            $user->picture = $newPictureName;
            $user->save();

            return response()->json([
                'success' => TRUE,
                'message' => 'Profile picture updated',
                'data' => [
                    'user' => $user,
                ]
            ]);

        } else {
            return response()->json([
                'success' => FALSE,
                'message' => 'Please provide a picture !',
            ]);
        }
    }

    /**
     * This method will do mass update for user data
     */
    public function massUpdate(Request $request)
    {
        try {

            $user = Auth::user();

            if ($request->has('password')) {
                $request->merge(['password' => Hash::make($request->password)]);
            }

    
            $user->update($request->only(['name', 'username', 'picture', 'password']));
            
            return response()->json([
                'success' => TRUE,
                'message' => 'Success doing mass update to user data',
                'data' => [
                    'user' => $user,
                ]
            ]);

        } catch (Exception $e) {
            return response()->json([
                'success' => TRUE,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
