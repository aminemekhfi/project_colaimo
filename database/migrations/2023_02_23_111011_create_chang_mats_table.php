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
        Schema::create('chang_mats', function (Blueprint $table) {
            $table->id();
            $table->integer('Code');
            $table->date('Date');
            $table->string('TypeMach');
            $table->string('SrvEmet');
            $table->string('SrvRec');
            $table->string('Commentaire');
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
        Schema::dropIfExists('chang_mats');
    }
};
