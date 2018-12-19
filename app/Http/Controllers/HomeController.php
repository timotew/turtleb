<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }

    public function users()
    {
        return view('pages.users');
    }


    public function ask_me()
    {
        return view('pages.ask_me');
    }


    public function properties()
    {
        return view('pages.properties');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function conversion()
    {
        return view('pages.conversion');
    }

    public function vouchers()
    {
        return view('pages.vouchers');
    }

    public function purchased()
    {
        return view('pages.purchased');
    }

    public function level_chart()
    {
        return view('pages.level_chart');
    }

    public function social_circle_articles()
    {
        return view('pages.social_circle.articles');
    }

    public function social_circle_categories()
    {
        return view('pages.social_circle.categories');
    }

    public function spam()
    {
        return view('pages.spam');
    }


    public function wallet()
    {
        return view('pages.wallet');
    }

    public function notifications_email()
    {
        return view('pages.notifications.email');
    }

    public function notifications_push()
    {
        return view('pages.notifications.push');
    }

    public function money_transfer()
    {
        return view('pages.money_transfer');
    }

    public function rabbit_team()
    {
        return view('pages.rabbit_team');
    }

    public function rabbit_team_post()
    {
        return view('pages.rabbit_team_post');
    }

    public function moments()
    {
        return view('pages.moments');
    }

    public function chats()
    {
        return view('pages.chats');
    }

    public function contents()
    {
        return view('pages.contents');
    }
}
