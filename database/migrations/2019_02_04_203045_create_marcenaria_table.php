<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcenariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcenaria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orcamento');
            $table->integer('clientes_id')->unsigned()->nullable();
            $table->string('devProjeto');
            $table->string('ordemDeServico');
            $table->string('endereco');
            $table->string('telefone');
            $table->timestamps();
        });

        Schema::table('marcenaria', function (Blueprint $table) {
            $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete('set null');

        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcenaria');
    }
}
