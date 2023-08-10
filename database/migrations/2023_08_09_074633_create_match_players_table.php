<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_players', function (Blueprint $table) {
            $table->id();

            $table->string('position');
            $table->unsignedDouble('rating',2,1)->default(0);
            $table->unsignedInteger('minute_playing')->default(random_int(5,90));
            $table->unsignedInteger('goal')->default(random_int(0,3));
            $table->unsignedInteger('goal_assists')->default(random_int(0,3));
            $table->unsignedInteger('red_card')->default(0);
            $table->unsignedInteger('yellow_card')->default(random_int(0,1));
            $table->boolean('main_lineup')->default(1);

            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('team_id');

            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('player_id')->references('id')->on('players');
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
        Schema::dropIfExists('match_players');
    }
}
