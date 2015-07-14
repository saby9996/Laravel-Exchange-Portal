<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('imageable_id')->unsigned()->index();

            $table->string('imageable_type');

            $table->string('title', 50);
            
            $table->string('filename');
            
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
        Schema::drop('photos');
    }
}
