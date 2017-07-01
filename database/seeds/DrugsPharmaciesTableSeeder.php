<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class DrugsPharmaciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 0 ; $i<30 ; $i++ )
      {
        DB::table('drug_pharmacy')->insert([
            'drug_id' => rand(1,50) ,
            'pharmacy_id' => rand(1,5),
            'price' => mt_rand (1*10, 50*10) / 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
      }
    }
}
