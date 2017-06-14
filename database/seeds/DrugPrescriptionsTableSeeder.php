<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DrugPrescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 0 ; $i<70 ; $i++ )
      {
        DB::table('drug_prescription')->insert([
            'drug_id' => rand(1,50) ,
            'prescription_id' => rand(1,20),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
      }

    }
}
