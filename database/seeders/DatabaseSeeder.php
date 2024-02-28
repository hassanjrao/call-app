<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            PaymentMethodSeeder::class,
            PlanSeeder::class,
            UserSeeder::class,
            CountrySeeder::class,
            PhoneNumberSeeder::class,

        ]);
    }
}
