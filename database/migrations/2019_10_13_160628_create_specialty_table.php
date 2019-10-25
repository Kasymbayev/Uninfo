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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('university_id');
            $table->foreign('university_id')->references('id')->on('university');
            $table->string('specialty_name',25);
            $table->string('specialty_cipher',8);
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');
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
        Schema::dropIfExists('specialty');
    }
}
