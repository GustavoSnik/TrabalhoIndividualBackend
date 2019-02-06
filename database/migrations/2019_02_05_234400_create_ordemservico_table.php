<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdemservicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordemservico', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Regristro');
            $table->integer('clientes_id')->unsigned()->nullable();
            $table->boolean('ServicoPronto');
            $table->timestamps();

        });

        Schema::create('ordemservico', function (Blueprint $table){
            $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete("set null");
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordemservico');
            $table->foreign('clientes_id')->references('id')->on('outra_tabela')->onDelete("set null");

    }
}
