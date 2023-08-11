<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create(){
        return view('guest.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|min:1",
            "email" => "required|string|min:1",
            "website" => "required|string|min:1",
            "feedback" => "required|string|min:1",
        ]);
        return redirect()->to("/contact");
    }
}
