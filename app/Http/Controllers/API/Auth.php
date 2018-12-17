<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class Auth extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
