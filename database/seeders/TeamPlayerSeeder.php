<?php

namespace Database\Seeders;

use App\Models\EuroWorldSeason;
use App\Models\LeageStage;
use App\Models\League;
use App\Models\LeagueSeason;
use App\Models\Match;
use App\Models\MatchEvent;
use App\Models\MatchLineups;
use App\Models\MatchPlayer;
use App\Models\MatchResult;
use App\Models\MatchStatistical;
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
    protected $CONTINENT =["Asia","Africa","Europe","North America","South America","Oceania"];

    protected $COUNTRIES=["QATAR","ECUADOR","SENEGAL","NETHERLANDS","ENGLAND","IRAN","USA","WALES",
        "ARGENTINA","SAUDI ARABIA","MEXICO","POLAND","FRANCE","AUSTRALIA","DENMARK","TUNISIA",
        "SPAIN","COSTA RICA","GERMANY","JAPAN","BELGIUM","CANADA","MOROCCO","CROATIA",
        "BRAZIL","SERBIA","SWITZERLAND","CAMEROON","PORTUGAL","GHANA","URUGUAY","KOREA REPUBLIC"];
    public function run()
    {
//         create player
        foreach ($this->POSITION as $pst){
            foreach ($this->CONTINENT as $index=>$ctn){
                Players::factory(50)->create([
                    'position'=>$pst,
                    'nationality'=>$ctn
                ]);
            }
        }
        //  club team
        $teams=[];
        $ti=0;
        for($i=0;$i<120;$i++){
            $ti=$i%20==0?$i/20:$ti;
            $teams[$i] = Team::factory()->create([
                'continent'=>$this->CONTINENT[$ti],
                'level'=>0
            ]);
        }
        $nationalTeam=[];
        foreach ($this->COUNTRIES as $index=>$item){
            $nationalTeam[$index] = Team::factory()->create([
                'name'=>$item,
                'country'=>$item,
                'level'=>1
            ]);
        }
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
            'World Cup',"Euro league" ,"League Cup","Copa Argentina","Premier League","Champions League","La Liga","Serie A","Bundesliga","ligue 1"
        ];

        $area=[
            "England","Germany","Italia","Spain","France","Asia","Africa","Americas","world"
        ];

        foreach ($league as $index=>$item){
             League::factory()->create(['name'=>$item]);
        }
        $league_Created=League::all();
        // league season
        foreach ($league_Created as $index=>$item){
             LeagueSeason::factory()->create(['league_id'=>$item->id]);
        }
// euro world cup season
        $euroSeason=EuroWorldSeason::create([
            'season'=>'2023',
            'started_at'=>Carbon::now(),
            'description'=>"description euro",
            'league_id'=>2,
        ]);
        $wc_season=EuroWorldSeason::create([
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
        // team normal league season
        $id=2;
        foreach ($teams as $index=>$item){
            $id=$index%20==0?$id+1:$id;
            TeamLeagueSeason::create([
                'team_id'=> $item->id,
                'league_season_id'=>$id
            ]);
        }
        // team euro-wc-season
        foreach ($nationalTeam as $nt){
            TeamLeagueSeason::create([
                'team_id'=> $nt->id,
                'euro_world_season_id'=>$wc_season->id
            ]);
        }
        $league_Season_Created= LeagueSeason::all();
        // match normal league
        $this->createMatch($league_Season_Created,0);
        $this->createMatch($league_Season_Created,1);
        // match player
        $formations=['4-4-2','4-3-3','5-3-2','4-3-2-1'];
        foreach ($league_Season_Created as $item) {
            // find match finished for each season
            $matches = Matchx::Status(1)->LeagueSeason($item->id)->get();

            foreach ($matches as $m){
                // create match player
                $playert1= TeamPlayer::Team($m->first_team_id)->get();
                $playert2= TeamPlayer::Team($m->second_team_id)->get();
                foreach ($this->POSITION as $pst){
                    $mp1=0;
                    foreach ($playert1 as $pt1){
                        if($pt1->position==$pst){
                            // seed
                            MatchPlayer::create([
                                'position'=>$pst,
                                'main_lineup'=>$mp1 ,// 0 =  da chinh or 1= du bi
                                'match_id'=>$m->id,
                                'player_id'=>$pt1->player_id,
                                'team_id'=>$pt1->team_id,
                            ]);
                            $mp1=1;
                        }
                    }
                    $mp2=0;
                    foreach ($playert2 as $pt2){
                        if($pt2->position==$pst) {
                            MatchPlayer::create([
                                'position'=>$pst,
                                'main_lineup'=>$mp2,// da chinh or du bi
                                'match_id'=>$m->id,
                                'player_id'=>$pt2->player_id,
                                'team_id'=>$pt2->team_id,
                            ]);
                            $mp2=1;
                        }
                    }
                }

                //create match lineups
                MatchLineups::create(['formations'=>$formations[random_int(0,3)],'side'=>0 ,// 0 left , 1= right
                    'match_id'=>$m->id,'team_id'=>$m->first_team_id,]);
                MatchLineups::create(['formations'=>$formations[random_int(0,3)],'side'=>1,// 0 left , 1= right
                    'match_id'=>$m->id,'team_id'=>$m->second_team_id,]);
                // create Match statistical
                $bcl=100-random_int(15,85);
                MatchStatistical::create([
                    'number_of_shots'=>random_int(1,50),
                    'shot_on_Target'=>random_int(1,15),
                    'ball_control'=>$bcl,
                    'passes'=>random_int(300,700),
                    'accurate_passing_Rate'=>random_int(40,90),
                    'foul'=>random_int(0,40),
                    'yellow_card'=>random_int(0,24),
                    'red_Card'=>random_int(0,11),
                    'offside'=>random_int(0,50),
                    'corner_kick'=>random_int(0,24),
                    'match_id'=>$m->id,
                    'team_id'=>$m->first_team_id,
                ]);
                MatchStatistical::create([
                    'number_of_shots'=>random_int(1,50),
                    'shot_on_Target'=>random_int(1,15),
                    'ball_control'=>100-$bcl,
                    'passes'=>random_int(300,700),
                    'accurate_passing_Rate'=>random_int(40,90),
                    'foul'=>random_int(0,40),
                    'yellow_card'=>random_int(0,24),
                    'red_Card'=>random_int(0,11),
                    'offside'=>random_int(0,50),
                    'corner_kick'=>random_int(0,24),
                    'match_id'=>$m->id,
                    'team_id'=>$m->second_team_id,
                ]);

                // create match event
                $mpst11 = MatchPlayer::MainLineups(0)->Match($m->id)->Teams($m->first_team_id)->get();
                $mpst12 = MatchPlayer::MainLineups(1)->Match($m->id)->Teams($m->first_team_id)->get();

                $mpst21 = MatchPlayer::MainLineups(0)->Match($m->id)->Teams($m->second_team_id)->get();
                $mpst22 = MatchPlayer::MainLineups(1)->Match($m->id)->Teams($m->second_team_id)->get();

                $this->createMatchEvent(23,"Normal Goal","First Half",$mpst11[6]->player_id,null,$m->id);
                $this->createMatchEvent(36,"Normal Goal","First Half",$mpst11[7]->player_id,null,$m->id);

                $this->createMatchEvent(41,"Substitution","First Half",$mpst21[7]->player_id,$mpst22[5]->player_id,$m->id);
                $this->createMatchEvent(41,"Substitution","First Half",$mpst11[3]->player_id,$mpst12[4]->player_id,$m->id);

                $this->createMatchEvent(52,"Yellow card","First Half",$mpst11[9]->player_id,null,$m->id);

                $this->createMatchEvent(52,"Substitution","Second Half",$mpst21[9]->player_id,$mpst22[8]->player_id,$m->id);

                $this->createMatchEvent(80,"Own goal","Second Half",$mpst11[9]->player_id,null,$m->id);
                $this->createMatchEvent(89,"Penalty","Second Half",$mpst21[8]->player_id,null,$m->id);

                $this->createMatchEvent(98,"Yellow card","First Extra Time",$mpst22[4]->player_id,null,$m->id);
                $this->createMatchEvent(103,"Normal Goal","First Extra Time",$mpst21[4]->player_id,null,$m->id);


                $this->createMatchEvent(120,"Penalty","Penalty Shootout",$mpst11[10]->player_id,null,$m->id);
                $this->createMatchEvent(120,"Penalty","Penalty Shootout",$mpst11[10]->player_id,null,$m->id);
                $this->createMatchEvent(120,"Penalty","Penalty Shootout",$mpst21[9]->player_id,null,$m->id);
                $this->createMatchEvent(120,"Miss Penalty","Penalty Shootout",$mpst22[8]->player_id,null,$m->id);
                $this->createMatchEvent(120,"Penalty","Penalty Shootout",$mpst12[4]->player_id,null,$m->id);
                $this->createMatchEvent(120,"Miss Penalty","Penalty Shootout",$mpst21[8]->player_id,null,$m->id);
                $this->createMatchEvent(120,"Penalty","Penalty Shootout",$mpst11[7]->player_id,null,$m->id);
                $this->createMatchEvent(120,"Penalty","Penalty Shootout",$mpst21[6]->player_id,null,$m->id);

                // match result
                MatchResult::create(['match_id'=>$m->id,'team_id'=>$m->first_team_id,'goal'=>2,'penalty_shootout_goal'=>4,]);
                MatchResult::create(['match_id'=>$m->id,'team_id'=>$m->second_team_id,'goal'=>2,'penalty_shootout_goal'=>2,]);
            }


        }
        // match lineups

    }
    public  function createMatch($league_Season_Created,$location){
        foreach ($league_Season_Created as $item){
            $team = TeamLeagueSeason::LeagueSeason($item->id)->get();
            foreach ($team as  $i1x=>$t1){
                $day=$location?0:40;
                foreach ($team as  $i2=>$t2){
                    if($t1->team_id!=$t2->team_id){
                        Matchx::create([
                            'datetime'=>Carbon::now()->addDays($day),
                            'location'=>$location?'0':'1', // 0 = san khach, 1 = san nha
                            'status'=>$location?0:1, // 0 =  da xong, 1 = chua da , 2 = huy
                            'first_team_id'=>$t1->team_id,
                            'second_team_id'=>$t2->team_id,
                            'league_season_id'=>$item->id,
                        ]);
                        $day+=2;
                    }
                }
            }
        }
    }
    public function  createMatchEvent($minute,$type,$time,$p1,$p2,$match){
        MatchEvent::create([
            'minute'=>$minute,
            'event_type'=>$type, //  (Own goal, Normal Goal, Substitution, Yellow card, Red card,  Penalty, Miss Penalty)
            'time_at'=>$time, //(First Half, Second Half, Extra Time,Penalty Shootout )
            'first_player_id'=>$p1,
            'second_player_id'=>$p2,
            'match_id'=>$match,
        ]);
    }
}
