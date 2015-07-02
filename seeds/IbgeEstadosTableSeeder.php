<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IbgeEstadosTableSeeder extends Seeder {

    public function run() {

        DB::table('ibge_estados')->truncate();
        DB::disableQueryLog();

        DB::table('ibge_estados')->insert([
            ["cod_uf" => "11","uf" => "RO","nome_uf" => "Rondônia"],
            ["cod_uf" => "12","uf" => "AC","nome_uf" => "Acre"],
            ["cod_uf" => "13","uf" => "AM","nome_uf" => "Amazonas"],
            ["cod_uf" => "14","uf" => "RR","nome_uf" => "Roraima"],
            ["cod_uf" => "15","uf" => "PA","nome_uf" => "Pará"],
            ["cod_uf" => "16","uf" => "AP","nome_uf" => "Amapá"],
            ["cod_uf" => "17","uf" => "TO","nome_uf" => "Tocantins"],
            ["cod_uf" => "21","uf" => "MA","nome_uf" => "Maranhão"],
            ["cod_uf" => "22","uf" => "PI","nome_uf" => "Piauí"],
            ["cod_uf" => "23","uf" => "CE","nome_uf" => "Ceará"],
            ["cod_uf" => "24","uf" => "RN","nome_uf" => "Rio Grande do Norte"],
            ["cod_uf" => "25","uf" => "PB","nome_uf" => "Paraíba"],
            ["cod_uf" => "26","uf" => "PE","nome_uf" => "Pernambuco"],
            ["cod_uf" => "27","uf" => "AL","nome_uf" => "Alagoas"],
            ["cod_uf" => "28","uf" => "SE","nome_uf" => "Sergipe"],
            ["cod_uf" => "29","uf" => "BA","nome_uf" => "Bahia"],
            ["cod_uf" => "31","uf" => "MG","nome_uf" => "Minas Gerais"],
            ["cod_uf" => "32","uf" => "ES","nome_uf" => "Espírito Santo"],
            ["cod_uf" => "33","uf" => "RJ","nome_uf" => "Rio de Janeiro"],
            ["cod_uf" => "35","uf" => "SP","nome_uf" => "São Paulo"],
            ["cod_uf" => "41","uf" => "PR","nome_uf" => "Paraná"],
            ["cod_uf" => "42","uf" => "SC","nome_uf" => "Santa Catarina"],
            ["cod_uf" => "43","uf" => "RS","nome_uf" => "Rio Grande do Sul"],
            ["cod_uf" => "50","uf" => "MS","nome_uf" => "Mato Grosso do Sul"],
            ["cod_uf" => "51","uf" => "MT","nome_uf" => "Mato Grosso"],
            ["cod_uf" => "52","uf" => "GO","nome_uf" => "Goiás"],
            ["cod_uf" => "53","uf" => "DF","nome_uf" => "Distrito Federal"],
    ]);
  }
}