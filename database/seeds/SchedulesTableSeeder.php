<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Schedule::class, 100)->create()->each(function ($s) {
        $s->save();
    });
    }
}
