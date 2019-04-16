<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('1.hely');
            $table->integer('2.hely');
            $table->integer('3.hely');
            $table->integer('4.hely');
            $table->integer('5.hely');
            $table->integer('6.hely');
            $table->integer('7.hely');
            $table->integer('8.hely');
            $table->integer('9.hely');
            $table->integer('10.hely');
            $table->integer('11.hely');
            $table->integer('12.hely');
            $table->integer('13.hely');
            $table->integer('14.hely');
            $table->integer('15.hely');
            $table->integer('16.hely');
            $table->integer('17.hely');
            $table->integer('18.hely');
            $table->integer('19.hely');
            $table->integer('20.hely');
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
        Schema::dropIfExists('results');
    }
}
