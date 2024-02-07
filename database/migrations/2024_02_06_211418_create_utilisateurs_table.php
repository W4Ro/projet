<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo')->unique();
            $table->string('prenom');
            $table->string('nom');
            $table->string('email')->unique();
            $table->string('mot_de_passe');
            $table->unsignedBigInteger('id_equipe')->nullable();
            $table->foreign('id_equipe')->references('id')->on('equipes')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
