<?php

namespace Database\Seeders;

use App\Models\PhoneNumber;
use Illuminate\Database\Seeder;

class PhoneNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        PhoneNumber::factory()->count(20)->create(); // Creates 20 phone numbers
    }
}
