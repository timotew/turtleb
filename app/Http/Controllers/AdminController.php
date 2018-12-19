<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('role', 'admin')->get();
        return view('pages.staff.view', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.staff.add');
    }

    public function profile()
    {
      $user = Auth::user();
      return view('pages.profile', compact('user'));
    }

    public function profile_password(Request $request)
    {
      $old_password = $request->old_password;
      $new_password = $request->new_password;
      $confirm_password = $request->confirm_password;
      if($new_password != $confirm_password) {
        return Redirect::back()->withErrors(['Password Doesn\'t Match!']);
      }
      $user = Auth::user();
      if (!auth()->attempt(['email'=> $user->email, 'password'=> $old_password])) {
        return Redirect::back()->withErrors(['Password Doesn\'t Match!']);
      }
      $user->password = bcrypt($new_password);
      if ($user->save()) {
      return redirect()->back()->with('success', 'Account Updated Successfully!');
      }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
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
        if(User::where('email', $request->email)->count() > 0) {
            return Redirect::back()->withErrors(['Email Already Exist!']);
        }

        $user = new User;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->role = 'admin';
        $user->password =  bcrypt($request->password);
        if ($request->users) {
        $user->readUsers = isset($request->users->read) ? true: false;
        $user->writeUsers = isset($request->users->write) ? true: false ;
        }
        if ($request->adverts) {
        $user->readAdverts = isset($request->adverts->read) ? true: false;
        $user->writeAdverts =  isset($request->adverts->write) ? true: false;
        }
        if ($request->offers) {
        $user->readOffers = isset($request->offers->read) ? true: false ;
        $user->writeOffers = isset($request->offers->write) ? true: false ;
        }
        if ($request->coin) {
        $user->readCoin = isset($request->coin->read) ? true: false;
        $user->writeCoin = isset($request->coin->write) ? true: false;
        }

        if ($user->save()) {
            return redirect()->back()->with('success', 'Account Created Successfully!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        //
        $user = User::where('email', $request->email)->first();
        if(!$user) {
            return Redirect::back()->withErrors(['Unknown User']);
        }
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        if ($request->hasFile('picture')) {
            $user->image = $request->file('picture')->store('pictures/admin');
        }
        if ($user->save()) {
            return redirect()->back()->with('success', 'Account Updated Successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        //
    }
}
