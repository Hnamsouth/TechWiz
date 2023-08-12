<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointTeam
{

    // win- lose- draw - goal for - goal against - point
    public $win;
    public $lose;
    public $draw;
    public $goal_for;
    public $goal_against;
    public $point;
    public $team;
    public $league_season;




    public function __construct(){}
    public function get_win(){ return $this->win; }
    public function get_lose(){ return $this->lose; }
    public function get_draw(){ return $this->draw; }
    public function get_gf(){ return $this->goal_for; }
    public function get_ga(){ return $this->goal_against; }
    public function get_point(){ return $this->point; }
    public function get_team(){ return $this->team; }
    public function get_league_season(){ return $this->league_season; }

    public function set_win($win){  $this->win=$win; }
    public function set_lose($lose){  $this->lose=$lose; }
    public function set_draw($draw){  $this->draw=$draw; }
    public function set_goal_for($goal_for){  $this->goal_for=$goal_for; }
    public function set_goal_against($goal_against){  $this->goal_against=$goal_against; }
    public function set_point($point){  $this->point=$point; }
    public function set_team($team){  $this->team=$team; }
    public function set_league_season($league_season){  $this->league_season=$league_season; }
}
