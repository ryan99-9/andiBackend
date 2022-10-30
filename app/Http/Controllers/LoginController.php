<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
        {
            $user = User::where('email', $request->email)->first(); //1 row
            if ($user) {
                if(true){
                $token = $user->createToken('token-name')->plainTextToken;
                return response()->json(['token' => $token, 'responCode' => '0001'],200);
                }
            } else {
                return response()->json('Salah',400);
            }
        }

    public function logout(){
        $user = request()->user();
        $user->tokens()->delete();
        return response()->json([
            "error" => false,
            "message" => "Berhasil Keluar"
        ], 200);
    }
}