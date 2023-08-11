<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueStageTable extends Migration
{
    /**
     * Run the migrations.
     *name (qualifier,round_of_16,group stage,quarter_finals, semi-final, final)
     * @return void
     */
    public function up()
    {
        Schema::create('league_stage', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // (qualifier,round_of_16,group stage,quarter_finals, semi-final, final)
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
        Schema::dropIfExists('league_stage');
    }
}
