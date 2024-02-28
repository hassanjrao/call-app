<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::create(['roleName' => 'admin']);
        Role::create(['roleName' => 'customer']);
 // Creates 5 roles
    }
}
