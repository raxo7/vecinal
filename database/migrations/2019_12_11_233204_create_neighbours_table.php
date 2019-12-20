<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeighboursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neighbours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rut', 15)->unique();
            $table->string('name', 100);
            $table->string('father_last_name', 100);
            $table->string('mother_last_name', 100);
            $table->date('birthdate');
            $table->tinyInteger('genre_id')->unsigned();
            $table->tinyInteger('nationality_id')->unsigned();
            $table->tinyInteger('marital_state_id')->unsigned();
            $table->tinyInteger('city_id')->unsigned();
            $table->tinyInteger('village_id')->unsigned();
            $table->string('street_name');
            $table->string('street_number');
            $table->bigInteger('user_id')->unsigned()->unique();
            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('nationality_id')->references('id')->on('nationalities');
            $table->foreign('marital_state_id')->references('id')->on('marital_states');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('village_id')->references('id')->on('villages');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('neighbours');
    }
}
