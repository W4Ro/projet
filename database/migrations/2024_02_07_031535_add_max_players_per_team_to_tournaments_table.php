<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMaxPlayersPerTeamToTournamentsTable extends Migration
{
    public function up()
    {
        Schema::table('tournois', function (Blueprint $table) {
            $table->integer('max_players_per_team')->nullable();
        });
    }

    public function down()
    {
        Schema::table('tournois', function (Blueprint $table) {
            $table->dropColumn('max_players_per_team');
        });
    }
}

