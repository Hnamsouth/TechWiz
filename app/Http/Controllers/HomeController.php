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
//        $this->middleware('auth');
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
    public function index2()
    {
        return view('guest.shop');
    }
    public function index3()
    {
        return view('guest.match');
    }
    public function index4()
    {
        return view('guest.team');
    }
    public function index5()
    {
        return view('guest.contact');
    }
    public function index6()
    {
        return view('guest.playerdetail');
    }

}
