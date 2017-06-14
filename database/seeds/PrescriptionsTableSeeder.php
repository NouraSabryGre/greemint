<?php

use Illuminate\Database\Seeder;

class PrescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Prescription::class, 20)->create()->each(function ($p) {
        $p->save();
      });
    }
}
