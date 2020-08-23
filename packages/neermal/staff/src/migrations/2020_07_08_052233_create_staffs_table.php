<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('profile_image');
            $table->string('description');
            $table->string('phone');
            $table->string('email');
            $table->string('department_name'); 
            $table->string('designation');
            $table->string('joined_date');
            $table->string('regined_date')->nullable();
            $table->string('status'); 
        });
    }

    /**

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}