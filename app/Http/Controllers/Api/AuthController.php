<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = Validator::make($request->all(), [
            "email" => "required",
            "password" => "required",
        ]);
        if ($data->fails()) {
            return response()->json(["success" => false, "error" => [$data->errors()->first()]], 400);
        }
        $auth_attempt = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($auth_attempt)) {
            $user = User::where('email', $request->email)->first();
            $authToken = auth()->user()->createToken("API Token")->plainTextToken;
            auth()->user()->setRememberToken($authToken);
            auth()->user()->save();
            $response = [
                'status' => true,
                'response' => $user
            ];
            $error = 200;
        } else {
            $response = [
                'status' => false,
                'response' => 'Unauthorized'
            ];
            $error = 401;
        }
        return response()->json($response, $error);
    }
}
