<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GopY extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gop_y', function (Blueprint $table) {
            $table->increments('MA_GY'); ///khoa chinh kieu int tu tang
            $table->string('TEN_ND');
            $table->string('EMAIL');
             $table->string('NOI_DUNG');
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
