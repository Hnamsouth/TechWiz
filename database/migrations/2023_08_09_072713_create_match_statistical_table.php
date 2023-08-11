<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchStatisticalTable extends Migration
{
    /**
     * Run the migrations.
     * match_id,team_id, number_of_shots, shot_on_Target, ball_control,passes, accurate_passing_Rate,,foul,yellow_card,red_Card, offside, corner kick
     * @return void
     */
    public function up()
    {
        Schema::create('match_statistical', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('number_of_shots')->default(0);
            $table->unsignedInteger('shot_on_Target')->default(0);
            $table->unsignedInteger('ball_control')->default(0); // input minute team control
            $table->unsignedInteger('passes')->default(0);
            $table->unsignedTinyInteger('accurate_passing_Rate')->default(0);
            $table->unsignedTinyInteger('foul')->default(0);
            $table->unsignedTinyInteger('yellow_card')->default(0);
            $table->unsignedTinyInteger('red_Card')->default(0);
            $table->unsignedTinyInteger('offside')->default(0);
            $table->unsignedTinyInteger('corner_kick')->default(0);


            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('team_id');

            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_statistical');
    }
}
