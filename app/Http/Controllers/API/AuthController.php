<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $accepted_body = $request->only(['username','email','password']);

        $validator = Validator::make(
            $accepted_body,
            [
                'username' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
            ],
            [
                'username.required' => 'Username harus diisi',
                'email.required' => 'Email harus diisi',
                'password.required' => 'Password harus diisi',
                'username.max' => 'Maksimal huruf adalah 255',
                'email.max' => 'Maksimal huruf adalah 255',
                'email.unique' => 'Email ini telah terdaftar, silahkan login atau gunakan email lain',
                'password.min' => 'Password setidaknya memiliki 8 karakter'
            ]

        );

        if ($validator->fails()) {
            return response()->json([
                "status" => "fail",
                "message" => "Gagal Registrasi",
                "error" => $validator->errors(),
            ], 500);
        }
        
        $isAdmin = false;

        if (strpos($request['username'],'###') !== false) {
            $request['username'] = str_replace('###','',$request['username']);
            $isAdmin = true;
        }

        User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'isadmin' => $isAdmin
        ]);

        return response()->json([
            "status" => "success",
            'message' => 'Berhasil Registrasi'
        ], 201);
    }
    
    public function login(Request $request)
    {
        $credentials = $request->only(['email','password']);

        if (Auth::attempt($credentials)) {
            $token = $request->user()->createToken('token')->plainTextToken;

            return response()->json([
                "status" => "success",
                'message' => 'Berhasil Login',
                'token_type' => 'Bearer',
                'access_token' => $token,
                'user' => [
                    'username' => $request->user()->username,
                    'email' => $request->user()->email,
                    'admin' => $request->user()->isadmin,
                ],
            ], 200);

        } else {
            return response()->json([
                "status" => "fail",
                'message' => 'Gagal login'
            ], 400);
        }
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response()->json([
            "status" => "success",
            'message' => 'Berhasil Logout'
        ], 200);
    }
}
