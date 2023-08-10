<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();

            $table->dateTime('datetime');
            $table->string('location');
            $table->unsignedTinyInteger('status')->default(0);

            $table->unsignedBigInteger('first_team_id');
            $table->unsignedBigInteger('second_team_id');
            $table->unsignedBigInteger('league_season_id')->nullable();
            $table->unsignedBigInteger('euro_world_season_id')->nullable();
            $table->unsignedBigInteger('league_stage_id')->nullable();

            $table->foreign('first_team_id')->references('id')->on('teams');
            $table->foreign('second_team_id')->references('id')->on('teams');
            $table->foreign('league_season_id')->references('id')->on('league_season');
            $table->foreign('euro_world_season_id')->references('id')->on('euro_world_season');
            $table->foreign('league_stage_id')->references('id')->on('league_stage');

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
        Schema::dropIfExists('matches');
    }
}
