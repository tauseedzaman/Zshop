<?php

namespace Database\Seeders;

use App\Http\Livewire\Subscribe;
use App\Models\User;
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
       if (User::count() == 0) {
        User::create([
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
       }

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            ContactUsSeeder::class,
            AboutUsSeeder::class,
            SubscriberSeeder::class,
            FaqSeeder::class
        ]);
        if (User::count() < 50) {
            User::factory(1000)->create();
        }
    }
}
