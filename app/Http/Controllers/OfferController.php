<?php

namespace App\Http\Controllers;

use App\Offer;
use App\User;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $offers = Offer::all();
        return view('pages.special_offers.view', compact('offers'));
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
        return view('pages.special_offers.add', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer =  new Offer;
        /***
         * array(13) { ["_token"]=> string(40) "o8oh4Tpes3yrLYyREubVirwoW0YAM7ObDAVG76Vh" ["user"]=> string(7) "Timothy" ["date"]=> string(23) "10/30/2018 - 11/13/2018" ["location"]=> string(7) "eti-osa" ["total_voucher"]=> string(3) "344" ["gold_voucher"]=> string(3) "323" ["price_voucher"]=> string(3) "600" ["title"]=> string(11) "Adver title" ["name_value"]=> string(4) "Name" ["tags"]=> string(19) "tagggg, taggg, hans" ["content"]=> string(11) "The content" ["images"]=> string(7) "tmt.jpg" ["videos"]=> string(97) "Learn English - English Learning For Children - Fun way to Learn Spelling of 17 English Words.mp4" }
         */
        $user = User::find($request->user);
        if (!$user) {
            return Redirect::back()->withErrors(['Invalid User!']);
        }
        $dates = explode("-", $request->date);
        $offer->startDate = $dates[0];
        $offer->endDate = $dates[1];
        $offer->location = $request->location;
        $offer->total_voucher = $request->total_voucher;
        $offer->gold_voucher = $request->gold_voucher;
        $offer->price_voucher = $request->price_voucher;
        $offer->title = $request->title;
        $offer->name_value = $request->name_value;
        $offer->tags = $request->tags;
        $offer->content = $request->content;
        if ($request->hasFile('images')) {
        $offer->image = $request->file('images')->store('offers');
        }
        if ($request->hasFile('video')) {
        $offer->video = $request->file('video')->store('offers');
        }
        if ($user->offers()->save($offer)) {
            return redirect()->back()->with('success', 'Offer Created Successfully!');
        } else {
            return Redirect::back()->withErrors(['Unable to create Offer!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
