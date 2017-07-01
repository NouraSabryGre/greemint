<?php

use Illuminate\Database\Seeder;

class DrugsOrdersTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\DrugsOrder::class, 5)->create()->each(function ($d) {
        $d->save();
      });
    }
}
