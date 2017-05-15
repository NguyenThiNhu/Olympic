<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TruongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truong', function (Blueprint $table) {
             $table->increments('MA_TRUONG');
            $table->integer('MA_BAC')->unsigned();
            $table->foreign('MA_BAC')->references('MA_BAC')->on('bac_hoc');
             $table->integer('MA_QH')->unsigned();
            $table->foreign('MA_QH')->references('MA_QH')->on('quan_huyen');
            $table->string('TEN_TRUONG');
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
        //
    }
}
