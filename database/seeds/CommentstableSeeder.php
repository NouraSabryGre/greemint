<?php

use Illuminate\Database\Seeder;

class CommentstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Comment::class, 100)->create()->each(function ($c) {
        $c->save();
      });
    }
}
