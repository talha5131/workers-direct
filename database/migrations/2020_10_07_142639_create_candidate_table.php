<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('email'); 
            $table->string('CC'); 
            $table->string('phone'); 
            $table->string('address'); 
            $table->string('location'); 
            $table->string('jobCategory'); 
            $table->string('choice'); 
            $table->string('desiredSalary'); 
            $table->string('availability');
            $table->string('image'); 
            $table->string('cv'); 
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
        Schema::dropIfExists('candidate');
    }
}
