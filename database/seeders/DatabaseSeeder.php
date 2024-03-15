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
            UserSeeder::class, 
<<<<<<< HEAD

=======
            CustomerSeeder::class,
            PlanSeeder::class, 
            PaymentMethodSeeder::class,
            PhoneNumberSeeder::class,
>>>>>>> 468c46f0e8ea032a719c44532eb6354cda921327
        ]);
    }
}
