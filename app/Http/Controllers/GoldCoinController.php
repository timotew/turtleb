<?php

namespace App\Http\Controllers;

use App\GoldCoin;
use Illuminate\Http\Request;
use Redirect;

class GoldCoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coins = GoldCoin::all();
        return view('pages.gold_coin', compact('coins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $coin = new GoldCoin;
        $coin->unit = $request->unit;
        $coin->amount = $request->amount;
        $coin->title = $request->title;
        if ($coin->save()) {
            return redirect()->back()->with('success', 'Package Successfully!');
        } else{
            return Redirect::back()->withErrors(['Unable to create Package!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GoldCoin  $goldCoin
     * @return \Illuminate\Http\Response
     */
    public function show(GoldCoin $goldCoin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoldCoin  $goldCoin
     * @return \Illuminate\Http\Response
     */
    public function edit(GoldCoin $goldCoin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoldCoin  $goldCoin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoldCoin $goldCoin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoldCoin  $goldCoin
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoldCoin $goldCoin)
    {
        //
    }
}
