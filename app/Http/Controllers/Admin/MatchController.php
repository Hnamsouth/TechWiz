<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\League;
use App\Models\Matchs;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MatchController extends Controller
{

    public function list(Request $request) {
        $search = $request->get("search");

        $data = Matchs::Search($search)->paginate(20);



        return view("admin.match.list",compact('data'));
    }

    public function create(Request $request) {
        $team=Team::all();
        $league=League::all();

        return view("admin.match.add",compact('team','league'));
    }


    public function store(Request $request){


        $today_date = Carbon::now('Asia/Ho_Chi_Minh');

        $request->validate([
            "datetime" =>  'required|date|after:today',
            "location" => "required|string|min:1",
            "first_team"=>"required|different:second_team",
            "second_team"=>"required|different:first_team",
            "league_id"=>"required"
        ]);

        $data= $request->all();
        Matchs::create($data);
        return redirect()->to("/admin/match");



    }
    public function edit(Matchs $match) {
        $team=Team::all();
        $league=League::all();

        return view("admin.match.edit",compact('team','league','match'));
    }
    public function update(Request $request,Matchs $match){

        $request->validate([
            "datetime" =>  'required|date|after:today',
            "location" => "required|string|min:1",
            "first_team"=>"required|different:second_team",
            "second_team"=>"required|different:first_team",
            "league_id"=>"required"
        ]);

        $data= $request->all();
     $match->update($data);
        return redirect()->to("/admin/match");

    }
    public function delete(Matchs $match) {
        $match->delete();
        return redirect()->to( url("/admin/match") );
    }


    //
}
