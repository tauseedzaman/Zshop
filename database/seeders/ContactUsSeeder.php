<?php

namespace Database\Seeders;

use App\Models\contactus;
use Illuminate\Database\Seeder;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (contactus::count() == 0) {
            contactus::factory(1000)->create();
        }
    }
}
