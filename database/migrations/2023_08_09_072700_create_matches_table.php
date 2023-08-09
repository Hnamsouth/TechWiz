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

            $table->unsignedBigInteger('first_team');
            $table->unsignedBigInteger('second_team');
            $table->unsignedBigInteger('league_id');

            $table->foreign('first_team')->references('id')->on('teams');
            $table->foreign('second_team')->references('id')->on('teams');
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
        Schema::dropIfExists('matches');
    }
}
