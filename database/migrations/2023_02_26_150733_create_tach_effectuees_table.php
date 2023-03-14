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
        Schema::create('tach_effectuees', function (Blueprint $table) {
            $table->id();
            $table->integer('CodeTache');
            $table->date('DateTache');
            $table->string('Depar');
            $table->string('Service');
            $table->string('TacheEffec');
            $table->string('Commantaire');
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
        Schema::dropIfExists('tach_effectuees');
    }
};
