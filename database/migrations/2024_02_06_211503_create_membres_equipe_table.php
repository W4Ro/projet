<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresEquipeTable extends Migration
{
    public function up()
    {
        Schema::create('membres_equipe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_utilisateur');
            $table->unsignedBigInteger('id_equipe');
            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs');
            $table->foreign('id_equipe')->references('id')->on('equipes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('membres_equipe');
    }
}

