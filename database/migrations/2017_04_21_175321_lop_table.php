<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('lop', function (Blueprint $table) {
            $table->increments('MA_LOP');
            $table->integer('MA_TRUONG')->unsigned();
            $table->foreign('MA_TRUONG')->references('MA_TRUONG')->on('truong');
            $table->string('TEN_LOP');
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
