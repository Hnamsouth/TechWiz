<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(){
        $latest_players = Player::orderBy("created_at","desc")->limit(12)->get();
        return view("guest.profile",compact("latest_players"));
    }

    public function player(Player $player){
        $current_player = Player::where('id',$player->id);
        return view("guest.profile",compact('player','current_player'));
    }

}
