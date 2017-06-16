<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DoctorsHospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 0 ; $i<15 ; $i++ )
      {
        DB::table('doctor_hospital')->insert([
            'hospital_id' => rand(1,4),
            'doctor_id' => rand(1,10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
      }
    }
}
