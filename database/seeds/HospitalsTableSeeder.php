<?php

use Illuminate\Database\Seeder;

class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Hospital::class, 4)->create()->each(function ($h) {
        $h->save();
      });
    }
}
