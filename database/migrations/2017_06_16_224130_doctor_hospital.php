<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DoctorHospital extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('doctor_hospital', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('hospital_id');
          $table->integer('doctor_id');
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
      Schema::dropIfExists('doctor_hospital');
    }
}
