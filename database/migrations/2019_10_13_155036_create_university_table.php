<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('abbreviation');
            $table->string('title');
            $table->text('description');
            $table->string('rector');
            $table->string('military_dep');
            $table->string('address');
            $table->string('phone_number',13);
            $table->integer('university_code');
            $table->integer('average_grade');
            $table->integer('average_price');
            $table->string('university_type');
            $table->string('university_category');
            $table->string('fax_number',13);
            $table->string('email');
            $table->string('website');
            $table->string('university_img');
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
        Schema::dropIfExists('university');
    }
}
