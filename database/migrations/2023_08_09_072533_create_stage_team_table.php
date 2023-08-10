<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStageTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_team', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('index');

            $table->unsignedBigInteger('league_stage_id');

            $table->unsignedBigInteger('t1_id');
            $table->unsignedBigInteger('t2_id');
            $table->unsignedBigInteger('t3_id')->nullable();
            $table->unsignedBigInteger('t4_id')->nullable();
            $table->unsignedBigInteger('t5_id')->nullable();
            $table->unsignedBigInteger('t6_id')->nullable();

            $table->foreign('league_stage_id')->references('id')->on('league_stage');
            $table->foreign('t1_id')->references('id')->on('teams');
            $table->foreign('t2_id')->references('id')->on('teams');
            $table->foreign('t3_id')->references('id')->on('teams');
            $table->foreign('t4_id')->references('id')->on('teams');
            $table->foreign('t5_id')->references('id')->on('teams');
            $table->foreign('t6_id')->references('id')->on('teams');

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
        Schema::dropIfExists('stage_team');
    }
}
