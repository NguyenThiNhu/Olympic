<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tin_tuc', function (Blueprint $table) {

            $table->increments('MA_TINTUC'); ///khoa chinh kieu int tu tang
             $table->integer('MA_LOAITT')->unsigned();
            $table->foreign('MA_LOAITT')->references('MA_LOAITT')->on('loai_tin_tuc');
            $table->string('TIEUDE');
            $table->string('NOIDUNG');
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
