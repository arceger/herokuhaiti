<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicals', function (Blueprint $table) {
            $table->string('id_usr');
            $table->string('vacinas_st');
            $table->string('vacinas_brief');
            $table->string('tipo_sang');
            $table->string('alergias');
            $table->string('email');
            $table->foreign('id_usr')->references('id')->on('dependentes')->onDelete('cascade');
            $table->foreign('id_usr')->references('id')->on('associado')->onDelete('cascade');
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
        Schema::dropIfExists('medicals');
    }
}
