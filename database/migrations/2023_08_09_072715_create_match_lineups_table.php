<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchLineupsTable extends Migration
{
    /**
     * Run the migrations.
     *: id , match_id , formations(4-4-2) , side (left,right ) , team_id
     * @return void
     */
    public function up()
    {
        Schema::create('match_lineups', function (Blueprint $table) {
            $table->id();

            $table->string('formations');
            $table->boolean('side');

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
        Schema::dropIfExists('match_lineups');
    }
}
