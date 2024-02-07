<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_utilisateur');
            $table->unsignedBigInteger('id_tournoi');
            $table->timestamp('date_inscription')->useCurrent();
            $table->enum('statut', ['confirmée', 'en_attente', 'annulée']);
            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs');
            $table->foreign('id_tournoi')->references('id')->on('tournois');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
