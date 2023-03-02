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
        Schema::create('autresequips', function (Blueprint $table) {
            $table->id();
            $table->integer('CodeEquip');
            $table->string('TypeEquip');
            $table->string('MarEquip');
            $table->string('SerieEquip');
            $table->string('InfoEquip');
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
        Schema::dropIfExists('autresequips');
    }
};
