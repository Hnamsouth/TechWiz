<?php

namespace Database\Seeders;

use App\Models\EuroWorldSeason;
use App\Models\LeageStage;
use App\Models\League;
use App\Models\LeagueSeason;
use App\Models\Match;
use App\Models\MatchPlayer;
use App\Models\Players;
use App\Models\Team;
use App\Models\TeamLeagueSeason;
use App\Models\TeamPlayer;
use Carbon\Carbon;
use Database\Factories\PlayersFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class TeamPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public  $POSITION =[
        "GK","LB","CB","RB","CM","CDM","CAM","DM","LF","RF","ST"
    ];
    public function run()
    {
        $this->Done1();

    }
    public  function Done1(){
        // player
        foreach ($this->POSITION as $item){
            Players::factory(150)->create(['position'=>$item]);
        }
        // team
        $teams = Team::factory(100)->create();
        // team-player
        $index=1;
        foreach ($teams as $team){
            foreach ($this->POSITION as $item){
                TeamPlayer::create([
                    'position'=>$item,
                    'player_id'=>$index,
                    'team_id'=>$team->id,
                ])  ;
                TeamPlayer::create([
                    'position'=>$item,
                    'player_id'=>$index+1,
                    'team_id'=>$team->id,
                ])  ;
                $index+=2;
            }
        }
        // LEAGUE
        $league=[
            'World Cup',"Euro league" ,"League Cup","Copa Argentina","Premier League"
        ];

        $league_Created=[];
        foreach ($league as $index=>$item){
            $l=  League::factory()->create(['name'=>$item]);
            $league_Created[$index]=$l;
        }
        // league season
        $league_Season_Created=[];
        foreach ($league_Created as $index=>$item){
            $l=  LeagueSeason::factory()->create(['league_id'=>$item->id]);
            $league_Season_Created[$index]=$l;
        }
// euro world cup season
        EuroWorldSeason::create([
            'season'=>'2023',
            'started_at'=>Carbon::now(),
            'description'=>"description euro",
            'league_id'=>2,
        ]);
        EuroWorldSeason::create([
            'season'=>'2022',
            'started_at'=>Carbon::now(),
            'description'=>"description world cup",
            'league_id'=>1,
        ]);
        // leage stage
        $stage=['Round of 16', 'Group Stage', 'Quater Final', 'Semi Final','Final'];
        foreach ($stage as $item){
            LeageStage::create(['name'=>$item]);
        }
        // team league season
        $id=2;
        foreach ($teams as $index=>$item){
            $id=$index%20==0?$id+1:$id;
            TeamLeagueSeason::create([
                'team_id'=> $item->id,
                'league_season_id'=>$id
            ]);
        }
        // match normal league
        $this->createMatch($league_Season_Created,0);
        $this->createMatch($league_Season_Created,1);

        // match player
        foreach ($this->POSITION as $pst){

        }

        foreach ($league_Season_Created as $item) {
            $team = TeamLeagueSeason::Where('league_season_id', '=', $item->id)->get();
            foreach ($team as $i1x => $t1) {

            }
        }

        MatchPlayer::create([
            'position',
            'main_lineup',
            'match_id',
            'player_id',
        ]);
        // match lineups




    }
    public  function createMatch($league_Season_Created,$location){

        foreach ($league_Season_Created as $item){
            $team = TeamLeagueSeason::Where('league_season_id','=',$item->id)->get();
            foreach ($team as  $i1x=>$t1){
                $day=$location?0:40;
                foreach ($team as  $i2=>$t2){
                    if($t1->id!==$t2->id){
                        Match::create([
                            'datetime'=>Carbon::now()->addDays($day),
                            'location'=>strval($location), // 0 = san khach, 1 = san nha
                            'first_team'=>$t1->id,
                            'second_team'=>$t2->id,
                            'league_season_id'=>$item->id,
                            'euro_world_season_id',
                            'league_stage_id',
                        ]);
                        $day+=2;
                    }
                }
            }

        }


    }
}
