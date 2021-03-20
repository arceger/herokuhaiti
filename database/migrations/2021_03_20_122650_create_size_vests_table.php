<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizeVestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('size_vests', function (Blueprint $table) {
            $table->strrin('id');
            $table->string('altura'); //aproximada
            $table->string('cintura');
            $table->string('busto');//manequin
            $table->string('calcado');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('dependentes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('size_vests');
    }
}
