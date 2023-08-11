<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality');
            $table->string('position');
            $table->date('date_of_birth');
            $table->string('img');
            $table->text('des');

            $table->unsignedBigInteger('club_team_id')->nullable();
            $table->unsignedBigInteger('national_team_id')->nullable();
            $table->foreign('club_team_id')->references('id')->on('teams');
            $table->foreign('national_team_id')->references('id')->on('teams');
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
        Schema::dropIfExists('coaches');
    }
}
