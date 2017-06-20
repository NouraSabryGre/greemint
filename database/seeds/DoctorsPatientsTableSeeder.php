<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DoctorsPatientsTableSeeder extends Seeder
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
        DB::table('doctor_patient')->insert([
            'doctor_id' => rand(1,10),
            'user_id' => rand(1,10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
      }
    }
}
