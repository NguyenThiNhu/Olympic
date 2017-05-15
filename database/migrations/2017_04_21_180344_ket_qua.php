<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KetQua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ket_qua', function (Blueprint $table) {
            $table->increments('MA_KQ');
            $table->integer('MA_TK')->unsigned();
            $table->datetime('NGAY_GIO_THI');
             $table->integer('DIEM_SO');
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
