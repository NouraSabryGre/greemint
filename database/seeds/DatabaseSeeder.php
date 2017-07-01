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
        $this->call(PrescriptionsTableSeeder::class);
        $this->call(CommentstableSeeder::class);
        $this->call(DrugsTableSeeder::class);
        $this->call(DrugPrescriptionsTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(HospitalsTableSeeder::class);
        $this->call(ClinicsTableSeeder::class);
        $this->call(DoctorsHospitalsTableSeeder::class);
        $this->call(ClinicsDoctrosTableSeeder::class);
        $this->call(DoctorsPatientsTableSeeder::class);
        $this->call(CodesTableSeeder::class);
        $this->call(PharmaciseTableSeeder::class);
        $this->call(DrugsPharmaciesTableSeeder::class);
        $this->call(PaymentMethodsTableSeeder::class);
        $this->call(OrdersTabelSeeder::class);
        $this->call(DrugsOrdersTabelSeeder::class);

    }
}
