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
        Schema::create('armas_ocor_muns', function (Blueprint $table) {

            $table->unsignedBigInteger('arma_id');
            $table->foreign('arma_id')->references('id')->on('armas')->onDelete('cascade');
            
            $table->unsignedBigInteger('ocorrencia_id');
            $table->foreign('ocorrencia_id')->references('id')->on('ocorrencias')->onDelete('cascade');
            
            $table->unsignedBigInteger('municoes_id');
            $table->foreign('municoes_id')->references('id')->on('municaos')->onDelete('cascade');
            
            $table->primary(['arma_id','ocorrencia_id','municoes_id']);

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
        Schema::dropIfExists('armas_ocor_muns');
    }
};
