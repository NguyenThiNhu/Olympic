<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cauhoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cau_hoi', function (Blueprint $table) {
            $table->increments('MA_CH');
            $table->integer('MA_LOAI')->unsigned();
            $table->foreign('MA_LOAI')->references('MA_LOAI')->on('loai_cau_hoi');
            $table->integer('MA_DE')->unsigned();
            $table->foreign('MA_DE')->references('MA_DE')->on('de_thi');
            $table->string('NOI_DUNG');
             $table->date('TG_CAUHOI');
            $table->integer('STT_VONG')->nullable();

           
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
