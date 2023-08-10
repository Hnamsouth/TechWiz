<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{


    public function list(Request $request) {
        $search = $request->get("search");

        $data = League::Search($search)->paginate(20);



        return view("admin.league.list",compact('data'));
    }
    public function create(Request $request) {



        return view("admin.league.add");
    }

    public function store(Request $request) {

    }


}
