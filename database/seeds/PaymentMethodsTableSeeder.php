<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;


class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $methods = ['cash', 'credit'];

      for ($i=0; $i < count($methods); $i++) {
        DB::table('payment_methods')->insert([
            'method' => $methods[$i],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
      }


    }
}
