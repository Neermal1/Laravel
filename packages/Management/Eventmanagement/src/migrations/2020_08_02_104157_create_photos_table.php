<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('imageable_id')->unsigned();
            $table->string('imageable_type');
            $table->string('image');
            $table->string('caption');
            $table->integer('event_id');
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
        Schema::dropIfExists('photos');
    }
}

