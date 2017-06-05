<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Doctor::class, 2)->create()->each(function ($d) {
        $d->save();
        // $user_id = factory(App\User::class)->create()->id;
        // $doctor_id = $d->id;
        // DB::table('doctor_user')->insert(
          // [
            // 'user_id' => $user_id,
            // 'doctor_id' => $doctor_id,
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now()
          // ]
        // );
      });
    }
  }
