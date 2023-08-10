<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueSeasonTable extends Migration
{
    /**
     * Run the migrations.
     * id,season, league_id, start_Date , des,round
     * @return void
     */
    public function up()
    {
        Schema::create('league_season', function (Blueprint $table) {
            $table->id();
            $table->string('season');
            $table->date('started_at');
            $table->text('description');
            $table->unsignedTinyInteger('round'); // 16 round

            $table->unsignedBigInteger('league_id');
            $table->foreign('league_id')->references('id')->on('league');

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
        Schema::dropIfExists('league_season');
    }
}
