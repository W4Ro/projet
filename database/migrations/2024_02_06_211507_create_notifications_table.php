<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_utilisateur');
            $table->text('contenu');
            $table->enum('statut', ['non_lue', 'lue'])->default('non_lue');
            $table->timestamps();
            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}


