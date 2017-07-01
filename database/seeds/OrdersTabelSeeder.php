<?php

use Illuminate\Database\Seeder;

class OrdersTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Order::class, 5)->create()->each(function ($o) {
        $o->save();
      });
    }
}
