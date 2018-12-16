<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    public function login (Request $request) {
        if (auth()->attempt(['email'=> $request->username, 'password'=> $request->password])) {
            $user = Auth::user();
            $scope = $user->admin ? ['be-admin'] : ['be-accountant'];
            $token = $user->createToken($user->email, $scope)->accessToken;
            unset($user->password); // safe password
            return ['error'=> false, 'message'=>'Login successful.',
                    'token'=> $token, 'user'=> $user];
           }

           return ['error'=>true, 'message'=>'Invalid login parameter.'];
    }
}
