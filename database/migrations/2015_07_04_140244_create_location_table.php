<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function(Blueprint $table){
            $table->increments('id');

            $table->integer('city_id')->unsigned()->index();
            $table->foreign('city_id')->references('id')
                  ->on('cities')->onDelete('cascade');

            $table->integer('region_id')->unsigned()->index();
            $table->foreign('region_id')->references('id')
                  ->on('regions')->onDelete('cascade');

            $table->integer('country_id')->unsigned()->index();
            $table->foreign('country_id')->references('id')
                  ->on('countries')->onDelete('cascade');

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
        Schema::drop('locations');
    }
}
