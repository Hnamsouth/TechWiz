<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamLeagueSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_league_season', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('league_season_id')->nullable();
            $table->unsignedBigInteger('euro_world_season_id')->nullable();

            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('league_season_id')->references('id')->on('league_season');
            $table->foreign('euro_world_season_id')->references('id')->on('euro_world_season');
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
        Schema::dropIfExists('team_league_season');
    }
}
