<?php

use Illuminate\Database\Seeder;

class DrugsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Drug::class, 50)->create()->each(function ($d) {
        $d->save();
      });
    }
}
