<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_event', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('minute');
            $table->unsignedTinyInteger('event_type'); //  (Own goal, Normal Goal, Substitution, yellow card, red card,  Penalty, miss penalty)
            $table->unsignedTinyInteger('time_at'); // (fisrt half, second half, extra time,penalty shootout )

            $table->unsignedBigInteger('first_player_id')->nullable();
            $table->unsignedBigInteger('second_player_id')->nullable();

            $table->unsignedBigInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('first_player_id')->references('id')->on('players');
            $table->foreign('second_player_id')->references('id')->on('players');
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
        Schema::dropIfExists('match_event');
    }
}
