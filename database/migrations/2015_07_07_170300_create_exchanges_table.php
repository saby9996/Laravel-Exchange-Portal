<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function(Blueprint $table){
            $table->increments('id');

            $table->integer('offered_by')->unsigned()->index();
            $table->foreign('offered_by')->references('id')
                  ->on('users')->onDelete('cascade');

            $table->integer('offered_to')->unsigned()->index();
            $table->foreign('offered_to')->references('id')
                  ->on('users')->onDelete('cascade');

            $table->integer('item_id')->unsigned()->index();
            $table->foreign('item_id')->references('id')
                  ->on('items')->onDelete('cascade');

            $table->boolean('exchanged');

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
        Schema::drop('exchanges');
    }
}
