<?php

namespace App\Http\Controllers;

use App\Advert;
use App\User;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Storage;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $adverts = Advert::all();
      return view('pages.adverts.view', compact('adverts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::where('role', 'staff')->get();
        return view('pages.adverts.add', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $advert =  new Advert;
        $user = User::find($request->user);
        if (!$user) {
            return Redirect::back()->withErrors(['Invalid User!']);
        }
        $dates = explode("-", $request->displayDate);
        $advert->startDate = $dates[0];
        $advert->endDate =  $dates[1];
        $advert->location = $request->location;
        $advert->title = $request->title;
        $advert->name_value = $request->name_value;
        $advert->tags = $request->tags;
        $advert->content = $request->content;
        $advert->likes = 0;
        $advert->views = 0;
        $advert->comments = 0;
        $advert->shares = 0;
        $advert->rewards = 0;
        if ($request->hasFile('image')) {
            $advert->image = $request->file('image')->store('adverts');
            }
        if ($request->hasFile('images')) {
            $advert->images = $request->file('images')->store('adverts');
        }
        if ($request->hasFile('videos')) {
            $advert->images = $request->file('images')->store('adverts');
        }
        if ($user->adverts()->save($advert)) {
            return redirect()->back()->with('success', 'Advert Created Successfully!');
        } else {
            return Redirect::back()->withErrors(['Unable to create Advert!']);
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function show(Advert $advert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function edit(Advert $advert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advert $advert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advert $advert)
    {
        //
    }
}
