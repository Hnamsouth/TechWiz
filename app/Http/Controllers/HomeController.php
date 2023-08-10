<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('guest.home');
    }
    public function useraccount()
    {
        return view('guest.useraccount');
    }
    public function shop()
    {
        return view('guest.shop');
    }
    public function match()
    {
        return view('guest.match');
    }
    public function team()
    {
        return view('guest.team');
    }
    public function contact()
    {
        return view('guest.contact');
    }    public function blog()
    {
        return view('guest.blog');
    }
    public function blogDetails()
    {
        return view('guest.blog-details');
    }
    public function playerdetail()
    {
        return view('guest.playerdetail');
    }
    public function checkout()
    {
        return view('guest.checkout');
    }
    public function productdetail()
    {
        return view('guest.productdetail');
    }
}
