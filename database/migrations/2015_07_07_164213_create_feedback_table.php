<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function(Blueprint $table){
            $table->increments('id');

            $table->integer('location_id')->unsigned()->index();
            $table->foreign('location_id')->references('id')
                  ->on('locations')->onDelete('cascade');

            $table->string('subject', 50);

            $table->text('message');

            $table->string('email');

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
        Schema::drop('feedback');
    }
}
