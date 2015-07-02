<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIbgeEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibge_estados', function (Blueprint $table) {
            $table->integer('cod_uf', 2)->index();
            $table->string('uf', 2)->index();
            $table->string('nome_uf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ibge_estados');
    }
}
