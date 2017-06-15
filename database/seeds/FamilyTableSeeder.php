<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FamilyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i = 0 ; $i<5 ; $i++) {
        DB::table('family_user')->insert([
            'user_id' => rand(1,10) ,
            'family_id' => rand(1,10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
      }
    }
}
