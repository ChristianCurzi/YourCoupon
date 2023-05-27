<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('utente', function (Blueprint $table) {
            $table->string('Username', 50)->primary();
            $table->string('Password');
            $table->tinyInteger('Livello')->unsigned()->default(1);
            $table->string('Nome', 30);
            $table->string('Cognome', 30);
            $table->string('Email', 50);
            $table->date('Nascita');
            $table->string('Genere', 5);
            $table->string('Telefono', 10);
            $table->text('ProPic')->default('img/user/default.jpg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */


    public function down()
    {
        Schema::dropIfExists('utente');
    }
};
