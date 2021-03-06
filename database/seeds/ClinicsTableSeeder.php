<?php

use Illuminate\Database\Seeder;

class ClinicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Clinic::class, 4)->create()->each(function ($c) {
        $c->save();
      });
    }
}
