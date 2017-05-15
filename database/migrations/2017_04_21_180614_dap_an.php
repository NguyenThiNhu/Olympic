<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DapAn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dap_an', function (Blueprint $table) {
            $table->integer('MA_CH')->unsigned();
            $table->foreign('MA_CH')->references('MA_CH')->on('cau_hoi');
            $table->string('NOI_DUNG');
             $table->integer('TRANGTHAI');
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
