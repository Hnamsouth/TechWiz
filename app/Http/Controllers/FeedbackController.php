<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function list(Request $request) {
        $search = $request->get("search");
        $orderCol = $request->has('order_col') ? $request->get('order_col') : 'id';
        $sortBy = $request->has('sort_by') ? $request->get('sort_by') : 'asc';

        $data = Feedback::Search($search)->orderBy($orderCol,$sortBy)->paginate(20);

        return view("admin.feedback.list", compact('data'));
    }
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
        $data =$request->all();
        Feedback::create($data);
        return redirect()->to("/home");
    }
}
