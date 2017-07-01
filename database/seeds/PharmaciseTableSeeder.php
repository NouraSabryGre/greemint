<?php

use Illuminate\Database\Seeder;

class PharmaciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Pharmacy::class, 5)->create()->each(function ($p) {
        $p->save();
      });
    }
}
