<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeThi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('de_thi', function (Blueprint $table) {
            $table->increments('MA_DE'); ///khoa chinh kieu int tu tang
            $table->string('TEN_DE');
             $table->integer('SO_CAUHOI')->unsigned();// tuong duong
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
