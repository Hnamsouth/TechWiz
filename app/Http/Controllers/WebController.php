<?php

namespace App\Http\Controllers;

use App\Models\Players;
use App\Models\Team;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){

        return view("welcome");
    }

    public function uplogo(){
        $data=[
            'https://img.freepik.com/free-vector/hand-drawn-soccer-logo-template_23-2149364524.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/football-logo-background_1195-244.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/hand-drawn-flat-design-football-logo-template_23-2149373252.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/hand-drawn-soccer-logo-template_23-2149364523.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/football-championship-winner-golden-emblem_56103-414.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/soccer-logo-football-club-sign-badge-football-logo-with-shield-background-vector-design_213022-28.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/soccer-football-badge-design-templates-sport-team-identity-vector-illustrations_683941-13.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/vintage-sport-club-logo-design_23-2149521241.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/gradient-jaguar-logo-design_23-2149921516.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/vintage-sport-club-logo-design_23-2149530935.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/soccer-football-badge-design-templates-sport-team-vector-illustrations-black-background_683941-80.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/soccer-background-design_1366-19.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/vintage-ball-design_1176-286.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/hand-drawn-flat-design-soccer-logo-template_23-2149373251.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/retro-football-badge-with-wings_1176-119.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/soccer-football-badge-design-templates-sport-team-identity-vector-illustrations_683941-4.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/hand-drawn-flat-design-soccer-logo_23-2149376890.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/hand-drawn-flat-design-american-football-logo_23-2149392458.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/gradient-american-football-logo-template_23-2149380606.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/seoccer-fans-emblem_225004-1136.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/football-logo-vector_20448-290.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/tiger-football-logo_530521-837.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/hand-drawn-flat-design-football-logo-template_23-2149373250.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/sport-logo-template_1195-133.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/soccer-logo-template-design_1251-16.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-psd/world-cup-text-frame-top-view_187299-11378.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/soccer-gold-print-logo-premium-vector_555057-173.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/football-soccer-championship-logo-sport-design_142989-556.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/tiger-football-classic-logo_530521-839.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/vintage-football-club-sport-logo_23-2149153005.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/shield-super-bowl-badge_23-2147535111.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/soccer-football-badge-logo-design-templates-sport-team-identity-vector-illustrations_683941-137.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-psd/football-mockup-with-shield-3d-rendering-isolated_25996-780.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/cute-soccer-badge_7139-129.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/hand-drawn-sports-logo-template_23-2149437344.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/soccer-football-emblems-design-element-logo-label-emblem-sign_124137-2017.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/hand-drawn-baseball-logo-template_23-2149385151.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/hand-drawn-american-football-logo-template_23-2149385149.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/gradient-cross-country-logo_23-2149521238.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/football-club-logo_7518-288.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/gradient-soccer-logo-template_23-2149368891.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/sports-tournament-logo-concept_1017-19800.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/football-logo-soccer-logo-american-soccer-team-labels-emblems-with-football-balls-vector-illustration_1195-1039.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/king-famous-football-logo-design_105664-40.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/soccer-logo-football-logo-sport-team-logo-vectortemplate_1195-960.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/football-background-design_1366-18.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/soccer-league-logo-premium-vector_555057-161.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/flat-design-kickball-logo_23-2149479613.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/soccer-ball-with-ribbon_24908-61868.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/soccer-football-badge-logo-design-templates-sport-team-identity-vector-illustrations_683941-173.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/football-logo-template-sports-club-business-graphic-modern-design-vector_53876-151335.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/american-football-championship-poster_1284-39647.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/t-shirt-label-design-with-illustration-soccer-player-who-holds-ball_1284-51967.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/hand-drawn-lion-esport-logo_23-2150524277.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/soccer-goalkeeper-emblem_225004-1133.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/golden-badge-shield-with-gold-leaves_1017-30512.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/gradient-american-football-logo_52683-84311.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/vintage-soccer-club-1989-logo_23-2149188429.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-psd/shield-mockup-3d-rendering-isolated_25996-552.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-vector/football-club-logo_441059-74.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-vector/eagle-logo-design-template_23-2150413612.jpg?size=626&ext=jpg'

        ];
        $team=Team::all();
        $index=0;
        foreach ($team as $key=>$item){
            if ($key>=59 || $key>=119){
                $index=0;
            }
            $item->update(['logo'=>$data[$index]]);
            $index++;
        }


    }



    public function uplogoPlayer(){
        $data=[
            'https://img.freepik.com/free-photo/young-player-game-shot-competition_1368-1902.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/portrait-young-man-football-playing-motion-training-isolated-black-studio-background-kicking-ball_155003-46281.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/football-player-arena_23-2147644526.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/professional-african-american-football-soccer-player-motion-isolated-white-studio-background-fit-jumping-man-action-jump-movement-game_489646-4664.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-players-white-background_654080-1756.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/confident-young-caucasian-male-football-soccer-player-sportwear-boots-kicking-ball-goal-mixed-light-dark-wall-concept-healthy-lifestyle-professional-sport-hobby_155003-36614.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-players-action-professional-stadium_654080-1748.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/young-caucasian-male-football-soccer-player-kicking-ball-goal-mixed-light-dark-wall-concept-healthy-lifestyle-professional-sport-hobby_155003-33630.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/hard-work-beats-talent-when-talent-doesnt-work-hard-full-length-studio-shot-handsome-young-soccer-player-isolated-black_590464-48419.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/handsome-sportsman-juggling-ball_23-2147817384.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/striker-soccer-football-player-red-team-concept-celebrating-goal-stadium_43569-66.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/focused-sportsman-juggling-ball_23-2147817386.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-player-kicking-ball-black-background_176420-55766.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/football-soccer-player-motion-action-activity-concept_155003-10221.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/young-sportsman-juggling-ball_23-2147817329.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-players-action-professional-stadium_654080-1181.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/french-soccer-player-with-ball_692702-6781.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/propose-young-caucasian-male-football-soccer-player-sportwear-boots-kicking-ball-goal-mixed-light-dark-wall-concept-healthy-lifestyle-professional-sport-hobby_155003-36616.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/sportsman-celebrating-victory-screaming_23-2147817317.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/football-player_1368-3004.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-players-action-professional-stadium_654080-1219.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/confident-soccer-player-looking-camera_23-2147817370.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/young-goalkeeper-soccer-man-isolated-academy-soccer-team_1150-14674.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/soccer-player-with-ball_692702-5651.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/sportsman-posing-with-ball_23-2147817371.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/full-shot-man-playing-football_23-2150465400.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/one-african-man-football-player-training-isolated-white-background-concept-sport-movement-energy-dynamic_155003-46226.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/soccer-players-action-professional-stadium_654080-1226.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/male-soccer-football-player-training-action-isolated-gradient-studio-neon-light_155003-15990.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-players-white-background_654080-1277.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/young-goalkeeper-soccer-man-isolated-academy-soccer-team_1150-14676.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/smiling-sportsman-stepping-ball_23-2147817326.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/soccer-player-with-ball_692702-5647.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/young-sportsman-near-ball_23-2147817325.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/soccer-striker-red-uniform-hits-ball-with-acrobatic-kick-air-stadium_207634-4400.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-players-white-background_654080-1768.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/football-player-juggling-ball_23-2147833489.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-player-black-red-uniform-with-ball-hand-standing-grass-black-wall-looking-front_176420-42943.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/young-man-male-soccer-football-player-training-isolated-white-background_680097-1.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/portrait-young-man-football-playing-motion-training-isolated-white-studio-background_155003-46387.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/one-man-professional-soccer-football-player-training-isolated-gradient-wall_155003-37515.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-player-balancing-ball_23-2147817331.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/football-player-looking-ball-before-hitting-it_23-2147604937.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/blond-teenager-soccer-player-dressed-blue-uniform-plays-with-ball_613910-1510.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/football-player-celebrating-goal_23-2147604948.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-player-thinking-with-hand-waist_23-2147604939.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/serious-footballer-hitting-ball_23-2147604935.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/man-playing-football-colorful-background_1368-11079.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-player-standing-with-ball-playing-football_176420-16471.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/lucky-football-player_1368-3013.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/portrait-young-african-soccer-player-posing-isolated-black-background-concept-sport_155003-46229.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/football-player_144627-11767.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/soccer-player-man-with-dark-skinned-playing-kicking-ball_1368-17789.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-players-action-professional-stadium_654080-1208.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/portrait-young-man-football-playing-motion-training-isolated-black-studio-background-kicking-ball_155003-46280.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/front-view-male-rugby-player-posing-with-ball-arms-crossed_23-2148793316.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/football-player_144627-11774.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/soccer-players-action-professional-stadium_654080-1747.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/little-boy-posing-outdoors-with-football_23-2148631431.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/young-soccer-player-with-ball-dressed-red-jersey-front-white_231208-4173.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/football-player-improving-his-shot_23-2147604934.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/lucky-football-player_1368-3024.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/young-excited-football-player-red-jersey-celebrating-scoring-goal_231208-4164.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/football-player_144627-11766.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/football-player_1368-3018.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/blond-teenager-soccer-player-dressed-blue-uniform-holds-ball_613910-11828.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/sportsman-near-ball-looking-up_23-2147817379.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/young-goalkeeper-soccer-man-isolated-academy-soccer-team_1150-14662.jpg?size=626&ext=jpg',
            'https://img.freepik.com/premium-photo/young-blonde-man-playing-football_1368-16119.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/portrait-professional-soccer-player-red-shirt-isolated-white_231208-4154.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/soccer-player-with-ball-standing-one-knee-black-backgrou_176420-55768.jpg?size=626&ext=jpg',
            'https://img.freepik.com/free-photo/man-football-soccer-player-silhouette-studio-isolated-white-stands-with-ball-victory_231208-4209.jpg?size=626&ext=jpg',




        ];
        $team=Players::all();
        $index=0;
        foreach ($team as $key=>$item){
            if ($key>=71 || $key>=3290){
                $index=0;
            }
            $item->update(['img'=>$data[$index]]);
            $index++;
        }


    }


}
