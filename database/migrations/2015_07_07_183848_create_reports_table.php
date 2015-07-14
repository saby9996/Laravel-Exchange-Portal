<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function(Blueprint $table){
            $table->increments('id');

            $table->integer('target_id')->unsigned()->index();

            $table->string('target_type');

            $table->integer('reported_by')->unsigned()->index();
            $table->foreign('reported_by')->references('id')
                  ->on('users')->onDelete('cascade');

            $table->string('note');

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
        Schema::drop('reports');
    }
}
