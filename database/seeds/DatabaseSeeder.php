<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(FamilyTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
        $this->call(CommentstableSeeder::class);
        $this->call(DrugsTableSeeder::class);

    }
}
