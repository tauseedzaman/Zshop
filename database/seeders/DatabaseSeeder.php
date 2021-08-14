<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'username' => 'tauseedzaman',
            'full_name' => 'tauseed zaman',
            'country' => 'pakistan',
            'phone' => '+923429382554',
            'isAdmin' => true,
            'billing_address' => 'Pakistan 909 pak 9P',
            'default_shipping_address' => 'this is not a', 
            'email' => 'tauseedzaman@gmail.com',
            'password' => bcrypt('tauseedzaman')
        ]);
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
