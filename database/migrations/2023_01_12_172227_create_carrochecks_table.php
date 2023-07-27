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
        Schema::create('carrochecks', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('ocorrencias');
            $table->primary('id');
            $table->string('km', 10);
            $table->integer('capo');
            $table->integer('paralamaDianteiro_esq');
            $table->integer('paralamaDianteiro_dir');
            $table->integer('paralamaTraseiro_esq');
            $table->integer('paralamaTraseiro_dir');
            $table->integer('parachoqueDianteiro');
            $table->integer('portaDianteira_esq');
            $table->integer('portaDianteira_dir');
            $table->integer('portaTraseira_esq');
            $table->integer('portaTraseira_dir');
            $table->integer('luzDianteira');
            $table->integer('luzTraseira');
            $table->integer('parachoqueTraseiro');
            $table->integer('capoTraseiro');
            $table->integer('giroflex');
            $table->integer('vidro');
            $table->integer('interno');
            $table->integer('impressora');
            $table->integer('smartphone');
            $table->integer('motor');
            $table->integer('roda');
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
        Schema::dropIfExists('carrochecks');
    }
};
