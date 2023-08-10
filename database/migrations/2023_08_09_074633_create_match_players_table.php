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
            $table->unsignedInteger('minute_playing')->default(0);
            $table->unsignedInteger('goal')->default(0);
            $table->unsignedInteger('goal_assists')->default(0);
            $table->unsignedInteger('red_card')->default(0);
            $table->unsignedInteger('yellow_card')->default(0);
            $table->boolean('main_lineup')->default(1);

            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('player_id');

            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('player_id')->references('id')->on('players');
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
