<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Plan::factory()->count(3)->create(); // Creates 5 plans
        Plan::create(['name' => 'Standard', 'duration_months' => 12, 'price' => 39.99 ]);
        Plan::create(['name' => 'Premium', 'duration_months' => 12, 'price' => 49.99]);
        Plan::create(['name' => 'Legend', 'duration_months' => 12, 'price' => 59.99]);
    }
}
