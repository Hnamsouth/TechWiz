<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEuroWorldSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('euro_world_season', function (Blueprint $table) {
            $table->id();
            $table->string('season');
            $table->date('started_at');
            $table->text('description');

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
        Schema::dropIfExists('euro_world_season');
    }
}
