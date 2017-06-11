<?php

use Illuminate\Database\Seeder;

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
      });
    }
  }
