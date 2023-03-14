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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->integer('CodeStag');
            $table->string('NCIN');
            $table->string('Nom');
            $table->string('Prenom');
            $table->date('DN');
            $table->string('Tel');
            $table->string('Email');
            $table->string('Etab');
            $table->string('Branch');
            $table->string('Niveau');
            $table->string('TyStage');
            $table->date('Ddebut');
            $table->date('Dfin');
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
        Schema::dropIfExists('stagiaires');
    }
};
