<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalpacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palpacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('date');
            $table->string('ovario', 20);
            $table->string('tam_foliculo', 4);
            $table->string('carac_foliculo', 100);
            $table->integer('cl_dias');
            $table->string('cl_tipo', 100);
            $table->string('ut_edema', 10);
            $table->string('ut_liquido', 10);
            $table->string('ut_prenhez', 4);
            $table->string('injetaveis', 50);
            $table->string('inj_quantidade', 50);
            $table->string('procedimento', 100);
            $table->string('stallion', 150);
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('animal_id')->unsigned();
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');
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
        Schema::dropIfExists('palpacoes');
    }
}
