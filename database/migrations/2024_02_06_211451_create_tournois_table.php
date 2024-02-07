<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournoisTable extends Migration
{
    public function up()
    {
        Schema::create('tournois', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->string('jeu_associé');
            $table->integer('nombre_participants_max');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tournois');
    }
}
