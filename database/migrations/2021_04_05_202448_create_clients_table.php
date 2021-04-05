<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // crée la table clients dans la base de donnée 
        Schema::create('clients', function (Blueprint $table) {
            // crée un id avec AI Not null
            $table->id();
            // crée la colone name dans la base de donnée 
            $table->string('name');

            //crée 2 colone created_at et updated_at qui permet de savoir depuis quand le tuple existe est sa dernière maj
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
        Schema::dropIfExists('clients');
    }
}
