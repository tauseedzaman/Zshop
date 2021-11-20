<?php

namespace Database\Seeders;

use App\Models\contactus;
use App\Models\subscriber;
use Database\Factories\ContactedUsFactory;
use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (subscriber::count() == 0) {
            subscriber::factory(1000)->create();
        }
    }
}
