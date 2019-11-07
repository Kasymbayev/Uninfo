<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialtyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialty', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('direction_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('qualification_id');
            $table->string('specialty_name',255);
            $table->string('specialty_cipher',255);
            $table->timestamps();
            $table->foreign('direction_id')->references('id')->on('directions');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('qualification_id')->references('id')->on('qualification');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialty');
    }
}
