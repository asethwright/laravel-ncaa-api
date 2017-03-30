<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('players', function (Blueprint $table) {
        $table->increments('id');
        $table->string('first')->default('');
        $table->string('last')->default('');
        $table->integer('gamesPlayed')->default(0);
        $table->integer('avgMinutes')->default(0);
        $table->integer('ppg')->default(0); // points per game
        $table->integer('rpg')->default(0); // rebounds
        $table->integer('apg')->default(0); // assists
        $table->integer('spg')->default(0); // steals
        $table->integer('bpg')->default(0); // blocks
        $table->integer('tpg')->default(0); // turnovers
        $table->float('fgPercent', 8, 2)->default(0.00); // field goals
        $table->float('ftPercent', 8, 2)->default(0.00); // free throws
        $table->float('tpPercent', 8, 2)->default(0.00); // three pointers
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
      Schema::dropIfExists('players');
    }
}
