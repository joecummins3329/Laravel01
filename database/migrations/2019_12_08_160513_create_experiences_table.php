<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
           
           $table->increments('id');
           
           $table->unsignedInteger('user_id');
           
           $table->string('high_school');
           
           $table->string('sixth_form_college');
           
           $table->string('university');
           
           $table->string('national_league');
           
           $table->string('other');
            
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
        Schema::dropIfExists('experiences');
    }
}
