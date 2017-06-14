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
    public function run(Faker\Generator $faker)
    {
      for($i = 0 ; $i<70 ; $i++ )
      {
        DB::table('drug_prescription')->insert([
            'drug_id' => rand(1,50) ,
            'prescription_id' => rand(1,20),
            'repeat' => rand(1,4),
            'end_date' => $faker->date(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
      }

    }
}
