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
        Schema::create('parc_infos', function (Blueprint $table) {
            $table->id();
            $table->string('Departement');
            $table->string('Service');
            $table->string('Tord');
            $table->string('Mord');
            $table->string('TEc');
            $table->string('MEc');
            $table->string('TMClav');
            $table->string('TMSour');
            $table->string('SysExp');
            $table->string('Antivirus');
            $table->string('AdresseIP');
            $table->string('HardDrive');
            $table->string('RAM');
            $table->string('LecteurCD');
            $table->string('Imprimante');
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
        Schema::dropIfExists('parc_infos');
    }
};
