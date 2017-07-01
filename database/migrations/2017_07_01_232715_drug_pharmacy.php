<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DrugPharmacy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('drug_pharmacy', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('pharmacy_id');
          $table->integer('drug_id');
          $table->double('price');
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
      Schema::dropIfExists('drug_pharmacy');
    }
}
