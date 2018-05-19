<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sigla');
            $table->string('nome');
            $table->string('descricao');
            $table->string('imagem');

            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();

            $table->string('rua')->nullable();
            $table->string('cidade')->nullable();
            $table->string('numero')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('cep')->nullable();

            $table->longText('mapa')->nullable();
            $table->longText('sobre')->nullable();
            $table->longText('meta')->nullable();

            $table->string('ativo')->default('N');

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
        Schema::dropIfExists('sites');
    }
}
