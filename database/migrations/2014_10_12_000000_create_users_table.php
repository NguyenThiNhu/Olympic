<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('MA_TK');
            $table->integer('MA_LOP')->unsigned();
            $table->foreign('MA_LOP')->references('MA_LOP')->on('lop');
            $table->string('TEN_DN');
            $table->string('MAT_KHAU');
            $table->string('HO_TEN');
            $table->date('NGAY_SINH')->nullable();
            $table->string('GIOI_TINH')->nullable();
            $table->string('QUYEN');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
