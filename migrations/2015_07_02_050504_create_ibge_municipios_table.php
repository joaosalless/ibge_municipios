<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIbgeMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibge_municipios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_uf', 2)->index();
            $table->string('uf', 2)->index();
            $table->string('nome_uf');
            $table->string('cod_mesorregiao_geografica', 2)->index();
            $table->string('nome_mesorregiao');
            $table->string('cod_microrregiao_geografica', 3)->index();
            $table->string('nome_microrregiao');
            $table->string('cod_municipio', 5)->index();
            $table->string('cod_municipio_completo', 7)->index();
            $table->string('nome_municipio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ibge_municipios');
    }
}
